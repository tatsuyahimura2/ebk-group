<?php

namespace App\Http\Controllers;

use App\Models\test2;
use Illuminate\Http\Request;
use App\Models\Test;
use Auth;
use DB;
use App\Models\Role;
use App\Models\User;
use Laratrust\Models\LaratrustRole;

class Test3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

     public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        $user = Auth::user();

        if ($user->hasRole( 'admin') )  {
            $tests = Test::with('children')->whereNull('ext2_id')
            ->latest()
            ->paginate(3);

        }

        elseif ($user->hasRole( 'pp1') )  {
            $tests = Test::with('children')->whereNull('ext2_id')
            ->whereNull('pp1')
            ->whereNull('pp2')
            ->where('sektor_id', $user->sektor)
            ->where('unit_id', $user->unit )
            ->latest()
            ->paginate(3);
        }

        elseif ($user->hasRole( 'pp2') )  {
            $tests = Test::with('children')->whereNull('ext2_id')
            //->whereNull('kpp')
            ->whereNull('pp2')
            //->whereNull('penyemak1')
            //->where( 'penyemak2', $user->name )
            ->where('sektor_id', $user->sektor)
            ->where('unit_id', $user->unit )
            ->latest()
            ->paginate(3);

        }


        elseif ($user->hasRole( 'pengarah') ) {

                $tests = Test::with('children')->whereNull('ext2_id')
                ->latest()
                ->paginate(3);
        }
        return view ('/test1/listtest', compact('user', 'tests'))->with('i', (request()->input('page', 1) - 1) * 3);

    }

    public function show21(Test $test)
    {
        $user = Auth::user();

        if ($user->hasRole( 'pp1') )  {
            $tests = Test::with('children')->where('ext2_id'=='ext1_id')
            ->orderBy('update_at', 'desc')
            ->get();

        }
        elseif ($user->hasRole( 'pp2') )  {
            $tests = Test::with('children')->where('ext2_id'=='ext1_id')
            ->orderBy('update_at', 'desc')
            ->get();

        }

        elseif ($user->hasRole( 'pyd') )  {
            $tests = Test::with('children')->where('ext2_id'=='ext1_id')
            ->orderBy('update_at', 'desc')
            ->get();

        }

        else {

        $tests = Test::where('user_id', $user->id)
        ->with('children')

        ->orderBy('update_at', 'desc')
        ->get();
        //$posts = Post::all();
        }
        return view ('/test1/listtest21', compact('user', 'tests'));

    }

    public function show3(Test $test)
    {
        $user = Auth::user();

        if ($user->hasRole( 'admin') )  {
            $tests1 = Test::with('children')->whereNull('ext2_id')
            ->latest()
            ->paginate(3);

            $tests = Test::with('children')->whereNull('ext2_id')
            ->latest()
            ->paginate(3);

            $tests2 = Test::with('children')->whereNull('ext2_id')
            ->latest()
            ->paginate(3);
        }

        elseif ($user->hasRole( 'pp1') )  {

            $tests = Test::with('children')->whereNull('ext2_id')
            //->where('penyemak2' , '!=', Null)
            ->where( 'penyemak1', $user->name )
            //->where('sektor_id', $user->sektor)
            //->where('unit_id', $user->unit )
            ->latest()
            ->paginate(3);


            $tests1 = Test::with('children')->whereNull('ext2_id')
            //->where('penyemak1' , '!=', Null)
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak2', $user->name)
            ->latest()
            ->paginate(3);

            $tests2 = Test::with('children')->whereNull('ext2_id')
            //->where( 'penyemak1', $user->name )
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak3', $user->name)
            ->latest()
            ->paginate(3);
        }

        elseif ($user->hasRole( 'pp2') )  {

            $tests = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak2')
            ->where( 'penyemak1', $user->name )
            //->where('sektor_id', $user->sektor)
            //->where('unit_id', $user->unit )
            ->latest()
            ->paginate(3);


            $tests1 = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak1')
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak2', $user->name)
            ->latest()
            ->paginate(3);

            $tests2 = Test::with('children')->whereNull('ext2_id')
            //->where( 'penyemak1', $user->name )
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak3', $user->name)
            ->latest()
            ->paginate(3);
        }


        elseif ($user->hasRole( 'pengarah') ) {

            $tests = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak2')
            ->where( 'penyemak1', $user->name )
            //->where('sektor_id', $user->sektor)
            //->where('unit_id', $user->unit )
            ->latest()
            ->paginate(3);

            $tests1 = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak1')
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak2', $user->name)
            ->latest()
            ->paginate(3);

            $tests2 = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak1')
            //->whereNull('penyemak2')
            ->where('penyemak3', $user->name)
            ->latest()
            ->paginate(3);
        }
        return view ('/test1/listtest3', compact('user', 'tests', 'tests1', 'tests2'))->with('i', (request()->input('page', 1) - 1) * 3);
        //dd ($tests1);
    }

    public function show2(Test $test)
    {
        if ($user->hasRole( 'pp1') )  {
            $tests = Test::with('children')->where('ext2_id'=='ext1_id')
            ->orderBy('update_at', 'desc')
            ->get();

        }
        elseif ($user->hasRole( 'pp2') )  {
            $tests = Test::with('children')->where('ext2_id'=='ext1_id')
            ->orderBy('update_at', 'desc')
            ->get();

        }

        elseif ($user->hasRole( 'pyd') )  {
            $tests = Test::with('children')->where('ext2_id'=='ext1_id')
            ->orderBy('update_at', 'desc')
            ->get();

        }

        else {

        $tests = Test::where('user_id', $user->id)
        ->with('children')

        ->orderBy('update_at', 'desc')
        ->get();
        //$posts = Post::all();
        }
        return view ('/test1/listtest2', compact('user', 'tests'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function editp1($id)
    {
        $data = Test::find($id);
        return view ('/test1/penilaian1', ['data'=>$data]);
    }

    public function editp2($id)
    {
        $data = Test::find($id);
        return view ('/test1/penilaian2', ['data'=>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function updatep1(Request $request, test2 $test2)
    {
        $user = Auth::user();

        $data = Test::find($request->id);

        $data->penilaian_1 = $request->penilaian_1;
        $data->pp1_semak = $request->pp1_semak;
        $data->pp_1_nama = $user->name;
        $data->save();

        return redirect()->back()->with('success', ' Semakan Selesai  !');

    }

    public function updatep2(Request $request, test2 $test2)
    {
        $user = Auth::user();

        $data = Test::find($request->id);
        $data->penilaian_2 = $request->penilaian_2;
        $data->pp2_semak = $request->pp2_semak;
        $data->pp_2_nama = $user->name;
        $data->save();

        return redirect()->back()->with('success', ' Semakan Selesai  !');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */

    //ulasan

    public function ulasan(Request $request, test2 $test2)
    {
        $user = Auth::user();

        $test = Test::where('ext1_id', $request->ext2_id)
        ->update(['catatan' => $request->catatan,
        'kpp_nama' => $user->name,
        'kpp_semak' => $request->kpp_semak,

        ]);


        return redirect()->back()->with('success', ' Ulasan Selesai  !');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }

    public function Kira2(Request $request,Test $test)
    {
        $total = Test::where('ext1_id', $request->ext2_id)->sum('penilaian_1');
        $input = Test::where('ext1_id', $request->ext2_id)->where('penilaian_1', '!=', 'Null')->count();
        //$purata = Test::select('jumlah_input')->where('ext1_id', '=', $request->ext2_id)->value('jumlah_input');
        $purata1 = (round($total / $input)); //$tipslastmonth == 0 ? 0 : ($sumOfTheOddsLastMonth / $tipslastmonth);

        if ($purata1 >= 81) {
            $skor = 5;
            $tahap1 = 'Cemerlang';
        }
        elseif ($purata1 >= 61) {
            $skor = 4;
            $tahap1 = 'Baik';
        }
        elseif ($purata1 >= 41) {
            $skor = 3;
            $tahap1 = 'Sederhana';
        }
        elseif ($purata1 >= 21) {
            $skor = 2;
            $tahap1 = 'Memuaskan';
        }
        else {
            $skor = 1;
            $tahap1 = 'Lemah';
        }

        $test = Test::where('ext1_id', '=', $request->ext2_id)
        ->update(['total_all' => $total,
        'jumlah_input' =>$input,
        'purata' => $purata1,
        'skor' => $skor,
        'tahap1' => $tahap1,
        ]);


        return redirect()->route('list.test3')->with('success', ' Kemaskini Kiraan Selesai !');

        //dd($input);
    }

    public function Kira3(Request $request,Test $test)
    {

        $total1 = Test::where('ext1_id', '=', $request->ext2_id)->sum('penilaian_2');

        $input1 = Test::where('ext1_id', '=', $request->ext2_id)->where('penilaian_2', '!=', 'Null')->count();
        //$purata = Test::select('jumlah_input')->where('ext1_id', '=', $request->ext2_id)->value('jumlah_input');

        $purata1 = $total1 / $input1;

        if ($purata1 >= 81) {
            $skor2 = 5;
            $tahap2 = 'Cemerlang';
        }
        elseif ($purata1 >= 61) {
            $skor2 = 4;
            $tahap2 = 'Baik';
        }
        elseif ($purata1 >= 41) {
            $skor2 = 3;
            $tahap2 = 'Sederhana';
        }
        elseif ($purata1 >= 21) {
            $skor2 = 2;
            $tahap2 = 'Memuaskan';
        }
        elseif ($purata1 >= 0) {
            $skor2 = 1;
            $tahap2 = 'Lemah';
        }
        else {
            $purata1 = 0;
        }

        $test = Test::where('ext1_id', '=', $request->ext2_id)
        ->update(['total_all2' => $total1,
        'jumlah_input2' =>$input1,
        'purata2' => $purata1,
        'skor2' => $skor2,
        'tahap2' => $tahap2,
        ]);


        return redirect()->route('list.test3')->with('success', ' Kemaskini Kiraan Selesai !');

        //dd($input);
    }



    public function cetak2(Test $test)
    {
        $user = Auth::user();

        $tests = Test::where('user_id', $user->id)
        ->with('children')

        ->orderBy('update_at', 'desc')
        ->get();
        //$posts = Post::all();

        return view ('/test1/listtest2', compact('user', 'tests'));

    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $user = Auth::user();

        if ($user->hasRole( 'admin') )  {
            $tests1 = Test::with('children')->whereNull('ext2_id')
            ->latest()
            ->paginate(3);

            $tests = Test::with('children')->whereNull('ext2_id')
            ->latest()
            ->paginate(3);

            $tests2 = Test::with('children')->whereNull('ext2_id')
            ->latest()
            ->paginate(3);
        }

        elseif ($user->hasRole( 'pp1') )  {

            $tests = Test::query()->with('children')->whereNull('ext2_id')
            //->where('penyemak2' , '!=', Null)
            ->where( 'penyemak1', $user->name )
            ->orwhere('ic', 'LIKE', "%{$search}%")
            ->orderBy('id', 'asc')
            ->get();


            $tests1 = Test::query()->with('children')->whereNull('ext2_id')
            //->where('penyemak1' , '!=', Null)
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak2', $user->name)
            ->where('ic', 'LIKE', "%{$search}%")
            ->orderBy('id', 'asc')
            ->get();

            $tests2 = Test::query()->with('children')->whereNull('ext2_id')
            //->where( 'penyemak1', $user->name )
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak3', $user->name)
            ->where('ic', 'LIKE', "%{$search}%")
            ->orderBy('id', 'asc')
            ->get();
        }

        elseif ($user->hasRole( 'pp2') )  {

            $tests = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak2')
            ->where( 'penyemak1', $user->name )
            //->where('sektor_id', $user->sektor)
            //->where('unit_id', $user->unit )
            ->where('ic', 'LIKE', "%{$search}%")
            ->orderBy('id', 'asc')
            ->get();

            $tests1 = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak1')
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak2', $user->name)
            ->where('ic', 'LIKE', "%{$search}%")
            ->orderBy('id', 'asc')
            ->get();

            $tests2 = Test::with('children')->whereNull('ext2_id')
            //->where( 'penyemak1', $user->name )
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak3', $user->name)
            ->where('ic', 'LIKE', "%{$search}%")
            ->orderBy('id', 'asc')
            ->get();
        }


        elseif ($user->hasRole( 'pengarah') ) {

            $tests = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak2')
            ->where( 'penyemak1', $user->name )
            ->where('ic', 'LIKE', "%{$search}%")
            ->orderBy('id', 'asc')
            ->get();

            $tests1 = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak1')
            //->where('penyemak1', '==', $user->name, '||', 'penyemak2', '==', $user->name)
            ->where('penyemak2', $user->name)
            ->where('ic', 'LIKE', "%{$search}%")
            ->orderBy('id', 'asc')
            ->get();

            $tests2 = Test::with('children')->whereNull('ext2_id')
            //->whereNull('penyemak1')
            //->whereNull('penyemak2')
            ->where('penyemak3', $user->name)
            ->where('ic', 'LIKE', "%{$search}%")
            ->orderBy('id', 'asc')
            ->get();
        }
        return view ('/test1/search', compact('user', 'tests', 'tests1', 'tests2'))->with('i', (request()->input('page', 1) - 1) * 3);

    }

}
