<?php

namespace App\Http\Controllers\Base;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

/**
 * Class BaseController
 * @package App\Http\Controllers\Base
 */
class BaseController extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $_area = '';
    protected $_viewData = [];
    protected $_title = '';
    protected $_repository;
    protected $_confirmRoute;
    // For SEO
    protected $_description = '';
    protected $_keywords = '';
    protected $_image = '';
    protected $_url = '';

    public function getArea()
    {
        return $this->_area;
    }

    public function getViewData()
    {
        return $this->_viewData;
    }

    public function setViewData($viewData = [])
    {
        $this->_viewData = array_merge($this->getViewData(), $viewData);
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function getKeywords()
    {
        return $this->_keywords;
    }

    public function setKeywords($keywords)
    {
        $this->_keywords = $keywords;
    }

    public function getImage()
    {
        return $this->_image;
    }

    public function setImage($image)
    {
        $this->_image = $image;
    }

    public function getUrl()
    {
        return $this->_url;
    }

    public function setUrl($url)
    {
        $this->_url = $url;
    }

    public function getCurrentControllerAction()
    {
        $routeAction = Route::currentRouteAction();
        $arrayRouteAction = explode('\\', $routeAction);
        $controllerAction = end($arrayRouteAction);

        list($controller, $action) = explode('@', $controllerAction);
        return [
            'controller' => $controller,
            'action' => $action,
        ];
    }

    public function getCurrentControllerName($toLower = true)
    {
        $controller = data_get($this->getCurrentControllerAction(), 'controller');
        $controller = data_get(explode('Controller', $controller), 0);
        return $toLower ? Str::lower($controller) : $controller;
    }

    public function getCurrentActionName()
    {
        return data_get($this->getCurrentControllerAction(), 'action');
    }

    public function render($view = null, $data = [], $mergeData = [])
    {
        $view = $view ? $view : $this->getArea() . '.' . $this->getCurrentControllerName() . '.' . $this->getCurrentActionName();
        $data = array_merge($data, $this->getViewData());
        $data += [
            '_title' => $this->getTitle(),
            '_description' => $this->getDescription(),
            '_keywords' => $this->getKeywords(),
            '_image' => $this->getImage(),
            '_url' => $this->getUrl(),
        ];

        $this->setViewData($data);
        return view($view, $data, $mergeData);
    }

    public function getRepository()
    {
        return $this->_repository;
    }

    public function setRepository($repository)
    {
        $this->_repository = $repository;
    }

    public function getConfirmRoute()
    {
        return $this->_confirmRoute;
    }

    public function setConfirmRoute($confirmRoute)
    {
        $this->_confirmRoute = $confirmRoute;
    }

    public function toConfirm()
    {
        return !empty($this->getConfirmRoute());
    }

    public function isBackend()
    {
        return $this->getArea() == 'backend';
    }

    public function isFrontend()
    {
        return $this->getArea() == 'frontend';
    }

    public function isApi()
    {
        return $this->getArea() == 'api';
    }

    public function index()
    {
        return $this->render();
    }

    public function show($id)
    {
        return $this->render();
    }

    public function create()
    {
        $entity = $this->getRepository()->findFirstOrNew();
        $this->setViewData(compact('entity'));
        return $this->render();
    }

    public function validStore($request)
    {
        if ($this->toConfirm()) {
            return redirect()->route($this->getConfirmRoute());
        }
        return $this->store();
    }

    public function store()
    {
        DB::beginTransaction();
        try {

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            logs($e);
        }
    }

    public function edit($id)
    {
        $entity = $this->getRepository()->findById($id);
        $this->setViewData(compact('entity'));
        return $this->render();
    }

    public function update($id)
    {

    }

    public function confirm()
    {
        return $this->render();
    }

    public function destroy($id)
    {

    }
}
