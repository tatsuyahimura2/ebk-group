<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-100 leading-tight">
            {{ __('Sistem eBK') }}
        </h2>
</x-slot>
<br>
<div class="container">

@if(session()->has('warning'))
    <div class="alert alert-warning">
        {{ session()->get('warning') }}
    </div>
@endif

@if(session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<!--&nbsp; <a class="btn btn-primary float-right mb-3" href="">Cipta eBK</a>-->

<button type="button" class="btn btn-success float-right mb-3" data-toggle="modal" data-target=".bd-example-modal-sm">Carian Pegawai</button>

<!-- <a class="btn btn-primary float-right mb-3" href="">filter date</a> -->
@forelse ( $tests1 as $test)

<table  class="table table-bordered table-striped table-dark table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Kad Pengenalan</th>
      <th scope="col">Sektor</th>
      <th scope="col">Unit</th>
      <th scope="col">Jawatan</th>
      <th scope="col">Gred</th>
      <th scope="col">Tahun</th>
      <th scope="col">Perincian</th> 
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <tr>
 
  <td>{{$test->pyd}}</td>
  <td><input type="text" id="copy_{{ $test->id }}" value="{{$test->ic}}" style="color: black; height: 15px; width: 160px;" readonly>
       <button value="copy" onclick="copyToClipboard('copy_{{ $test->id }}')"><i class="fa fa-copy" style="font-size:14px;color:silver" ></i></button></td>
  <td>{{$test->sektor_id}} </td>
  <td>{{$test->unit_id}} </td>
  <td>{{$test->jawatan}} </td>
  <td>{{$test->gred}} </td>
  <td>{{$test->tahun}} </td>
  <td>{{$test->created_at}}  </td>
  <td>
    <a href="{{ route('cetak.test', $test->id) }}" class="btn btn-info btn-sm fa fa-print" role="button" aria-pressed="true">Papar</a>
  </td>


  @if (count($test['children']) > 0  )
        
  @include( 'test1.listtest2', ['ext2_id' => $test->children]) 
        
        Sebanyak {{$test['children']->count()}} Borang Keberhasilan telah dijana.
      
  @endif

@empty  
</tr>

        <tr>
            <td></td>
        </tr>    
        
@endforelse
  </tbody>


</table>


@forelse ( $tests as $test)

<table  class="table table-bordered table-striped table-dark table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Kad Pengenalan</th>
      <th scope="col">Sektor</th>
      <th scope="col">Unit</th>
      <th scope="col">Jawatan</th>
      <th scope="col">Gred</th>
      <th scope="col">Tahun</th>
      <th scope="col">Perincian</th> 
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
  <tr>
 
  <td>{{$test->pyd}}</td>
  <td><p id="copy" >{{$test->ic}} &nbsp; <button type="button" onclick="copyEvent('copy')" title="Copy" ><i class="fa fa-copy" style="font-size:14px;color:silver" ></i></button></p> </td>
  <td>{{$test->sektor_id}} </td>
  <td>{{$test->unit_id}} </td>
  <td>{{$test->jawatan}} </td>
  <td>{{$test->gred}} </td>
  <td>{{$test->tahun}} </td>
  <td>{{$test->created_at}}  </td>
  <td>
    <a href="{{ route('cetak.test', $test->id) }}" class="btn btn-info btn-sm fa fa-print" role="button" aria-pressed="true">Papar</a>
  </td>


  @if (count($test['children']) > 0  )
        
  @include( 'test1.listtest2', ['ext2_id' => $test->children]) 
        
        Sebanyak {{$test['children']->count()}} Borang Keberhasilan telah dijana.
      
  @endif

  @empty  
  </tr>

          <tr>
              <td></td>
          </tr>    
          
  @endforelse
    </tbody>


  </table> 

  @forelse ( $tests2 as $test)

  <table  class="table table-bordered table-striped table-dark table-sm">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">Kad Pengenalan</th>
        <th scope="col">Sektor</th>
        <th scope="col">Unit</th>
        <th scope="col">Jawatan</th>
        <th scope="col">Gred</th>
        <th scope="col">Tahun</th>
        <th scope="col">Perincian</th> 
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
    <tr>

    <td>{{$test->pyd}}</td>
    <td><p id="copy" >{{$test->ic}} &nbsp; <button type="button" onclick="copyEvent('copy')" title="Copy" ><i class="fa fa-copy" style="font-size:14px;color:silver" ></i></button></p> </td>
    <td>{{$test->sektor_id}} </td>
    <td>{{$test->unit_id}} </td>
    <td>{{$test->jawatan}} </td>
    <td>{{$test->gred}} </td>
    <td>{{$test->tahun}} </td>
    <td>{{$test->created_at}}  </td>
    <td>
      <a href="{{ route('cetak.test', $test->id) }}" class="btn btn-info btn-sm fa fa-print" role="button" aria-pressed="true">Papar</a>
    </td>


    @if (count($test['children']) > 0  )
          
    @include( 'test1.listtest2', ['ext2_id' => $test->children]) 
          
          Sebanyak {{$test['children']->count()}} Borang Keberhasilan telah dijana.
        
    @endif

  @empty  
  </tr>

          <tr>
              <td></td>
          </tr>    
          
  @endforelse
    </tbody>


  </table> 


</div>

<!-- Modal Carian JPN-->
<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
    <form class="d-flex float-right mb-3" type="get" action="{{route('search.test3')}}">
    <input class="form-control me-2" type="text" name="search" placeholder="carian" aria-label="Search" title="Isi kad pengenalan" />
    <button class="btn btn-default btn-sm fa fa-search" type="submit" ></button></form>
    </div>
  </div>
</div>


</x-app-layout>
