<?php

namespace App\Http\Controllers\AdminControllers\Contact;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Session;
use Radiocar\Core\Entities\Contact\RcCountry;
use Radiocar\Core\Helpers;
use Radiocar\Core\Repositories\Contact\CountryRepo;
use App\Http\Requests\CreateCountryRequest;
class CountryController extends Controller
{
    /**
     * @var Request
     */
    private $request;
    /**
     * @var array
     */
    protected $country;
    /**
     * @var Helpers
     */
    protected $helper;

    /**
     * @param Request $request
     * beforeFilter Este filtro sirve para llamar el metodo findUser con las siguientes opciones
     */
    public function __construct(Request $request, Helpers $help)
    {
        $this -> request = $request;

        $this -> data = new \stdClass();

        $this -> middleware('@findUser', ['only' => ['show','edit','update','destroy']]);
    }

    /**
     * @param Route $route
     */
    public function findUser(Route $route)
    {
        $this -> country = RcCountry::findOrFail( $route -> getParameter('country') );
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collection = RcCountry::countryName( $this -> request -> get('search') )
            -> active( $this -> request -> get('active') )
            -> orderBy( 'country', 'DESC' )
            -> paginate();

        $this -> data -> collections = $collection;
        $data = $this -> data;

        return view( 'admin.contact.country.index', compact( 'data' ) );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = $this -> data;

        return view('admin.contact.country.create',  compact('data')); //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCountryRequest $request)
    {
        $country = RcCountry::create( $request -> all() );

        $message_floating = "Ha sido creado un nuevo país";
        $message_alert ="alert-success";

        Session::flash('message_floating', $message_floating);
        Session::flash('message_alert', $message_alert);

        return redirect() -> route('admin.country.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
