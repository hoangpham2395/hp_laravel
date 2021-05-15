<?php

namespace App\Repositories\Base;

/**
 * Class BaseRepository
 * @package App\Repositories\Base
 */
abstract class BaseRepository
{
    /**
     * @var
     */
    protected $_model;

    /**
     * BaseRepository constructor.
     */
    public function __construct()
    {
        $this->setModel();
    }

    /**
     * @return mixed
     */
    abstract public function model();

    /**
     * @throws \Illuminate\Contracts\Container\BindingResolutionException
     */
    public function setModel()
    {
        $this->_model = app()->make($this->model());
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->_model;
    }

    /**
     * __call() is called when you call method but this method is not exist in BaseRepository
     * @param $name (method name)
     * @param $arguments (params of method)
     * @return mixed
     */
    public function __call($name, array $arguments)
    {
        return call_user_func_array([$this->getModel(), $name], $arguments);
        // ~ call_user_func_array($this->getModel()->{$name}, $arguments)
        // call_user_func_array('functionA', ['param1', 'param2']) ~ functionA('param1', 'param2')
    }

    public function findFirstOrNew($id = null)
    {
        // New
        if (empty($id)) {
            return app()->make($this->model());
        }

        // Find first
        return $this->where($this->getKeyName(), $id)->first();
    }

    public function findById($id, $selects = ['*'])
    {
        return $this->select($selects)->where('id', $id)->first();
    }
}
