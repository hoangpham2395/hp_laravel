<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Base\BackendController;
use App\Http\Requests\Backend\Admin\StoreRequest;
use App\Repositories\AdminRepository;

/**
 * Class AdminController
 * @package App\Http\Controllers\Backend
 */
class AdminController extends BackendController
{
    public function __construct(AdminRepository $adminRepository)
    {
        $this->setRepository($adminRepository);
        $this->setConfirmRoute('backend.admin.confirm');
    }

    public function validStore(StoreRequest $request)
    {
        if ($this->toConfirm()) {
            return redirect()->route($this->getConfirmRoute());
        }
        return $this->store();
    }
}
