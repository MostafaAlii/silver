<?php
namespace App\Http\Controllers\Dashboard\Admin\Captains;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Dashboard\Admin\Captain\{CaptainBounesDataTable};
use App\Models\Captain;

//use App\Http\Requests\Dashboard\Admin\CaptionRequestValidation;
//use App\Services\Dashboard\{Admins\CaptainService, General\GeneralService};

class BounesController extends Controller {

    public function __construct(protected CaptainBounesDataTable $dataTable) {
        $this->dataTable = $dataTable;
    }

    public function index() {
        $data = [
            'title' => 'Captions Bounes',
            'captains' => Captain::active(),
        ];
        return $this->dataTable->render('dashboard.admin.bouns.index', compact('data'));
    }
}
