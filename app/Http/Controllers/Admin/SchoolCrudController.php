<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\SchoolRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class SchoolCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SchoolCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\School::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/school');
        CRUD::setEntityNameStrings('school', 'schools');

        $this->crud->addField([
            'name' => 'name',
            'label' => 'School Name',
            'type' => 'text',
        ]);
        $this->crud->addField([
            'name' => 'location',
             'label' => 'Location',
             'type' => 'text',
        ]);
    
        $this->crud->addField([
            'name' => 'ownership',
            'label' => 'Ownership Type',
            'type' => 'select_from_array',
            'options' => [
                'government' => 'Government',
                'personal' => 'Personal',
            ],
        ]);
        //  $this->crud->addField([
        //      'name' => 'file',
        //      'label' => 'File',
        //      'type' => 'file',
        //  ]);
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        //CRUD::enableExportButtons();

        CRUD::column('name');
        CRUD::column('location');
        CRUD::column('ownership');
        
        //CRUD::column('file');

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(SchoolRequest::class);
        $this->crud->setValidation([
            'name' => 'required',
            'location' => 'required',
            'ownership' => 'required',
        ]);
        // $this->crud->setValidation([
        //      'name' => 'file',
        //      'label' => 'File',
        //      'type' => 'file',
        //      'upload' => true, // Enable file upload
        //      'disk' => 'public', // Specify the storage disk (configured in filesystems.php)
        //      'path' => 'uploads/files', // Specify the upload directory
        //      'validation' => 'file|mimes:pdf,doc,docx|max:2048', // Validation rules
        //  ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number'])); 
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
