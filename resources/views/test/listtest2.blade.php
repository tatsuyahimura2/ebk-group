
@foreach ($test->children as $test)  
<table class="table table-bordered table-striped table-sm">
<tbody>
@if ($test->bidang_tugas != Null)
    <tr>
        <td style="width: 20%; background-color: darkseagreen;">Bidang Tugas / Fungsi Pertama</td>
        <td style="width: 60%;" colspan="2"><a href data-toggle="modal" id="mediumButton" data-target="#mediumModal"
                                    data-attr="{{ route('edit.test2', $test->id) }}" title="Kemaskini Fungsi">{{$test->bidang_tugas}}</a></td>

        <td style="width: 20%; text-align: right;">
                        <div class="linkbutton1">
                                    <button class="btn btn-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Status 
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" data-toggle="modal" id="mediumButtonKekal" data-target="#mediumModalKekal"
                                    data-attr="{{ route('kekal.test2', $test->id) }}" title="Kekal Fungsi" >Kekal</a>
                                    <a class="dropdown-item" data-toggle="modal" id="mediumButtonPinda" data-target="#mediumModalPinda"
                                    data-attr="{{ route('pinda.test2', $test->id) }}" title="Pinda Fungsi" >Pinda</a>
                                    <a class="dropdown-item" data-toggle="modal" id="mediumButtonGugur" data-target="#mediumModalGugur"
                                    data-attr="{{ route('gugur.test2', $test->id) }}" title="Gugur Fungsi" >Gugur</a>
                                    
                                    </div>
                                    &nbsp;<a href="{{ route('destroy.test2', $test->id) }}" class="btn btn-danger btn-sm fa fa-trash" role="button" aria-pressed="true" style="color:black" > Hapus</a>
                        </div>
        </td>
    </tr>
@else
@endif
@if ($test->bidang_tugas1 != Null)
    <tr>
        <td style="width: 20%; background-color: darksalmon;">Bidang Tugas / Fungsi Akhir</td>
        <td style="width: 60%;" colspan="2">{{$test->bidang_tugas1}}</td>
        <td style="width: 20%; text-align: right;"><a href="{{ route('destroy.test2', $test->id) }}" class="btn btn-danger btn-sm fa fa-trash" role="button" aria-pressed="true" style="color:black" > Hapus</a></td>
    </tr>
@endif
</tbody>
</table>
@endforeach
<hr>

@if ($test->children != Null)

<table style="width: 100%; border-collapse: collapse; margin-left: auto; margin-right: auto;" border="1">
    <tbody>
        @if ($test->penyemak3 != Null)
        <tr>
            <td style="width: 50; text-align: center;"><B>Pegawai Penilai Pertama untuk {{$test->pyd}} : <p style="color:green;">{{$test->penyemak3}}</p> </B></td>
            <td style="width: 50; text-align: center;"><B>Pegawai Penilai Akhir untuk {{$test->pyd}} : <p style="color:blue;">{{$test->penyemak3}}</p> </B></td>
        </tr>
        @else
        <tr>
            <td style="width: 50; text-align: center;"><B>Pegawai Penilai Pertama untuk {{$test->pyd}} : <p style="color:green;">{{$test->penyemak1}}</p> </B></td>
            <td style="width: 50; text-align: center;"><B>Pegawai Penilai Akhir untuk {{$test->pyd}} : <p style="color:blue;">{{$test->penyemak2}}</p></B></td>
        </tr>
        @endif
    </tbody>
</table>

@endif
<hr>


  <!-- medium modal -->
  <div class="modal fade BigModal" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelKekal"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-light bg-dark">
                    <h5 class="modal-title" id="exampleModalLabel2">Kemaskini Fungsi Keberhasilan</h5>  
                    </div>
                    <form id = "testedit" method="POST" action="{{ route('update.test2', $test->id) }}" enctype="multipart/form-data">
                      @csrf
                     
                        <div class="modal-body" id="mediumBody">
                            <div>
                                <!-- the result to be displayed apply here -->
                            </div>
                        </div>
                            <div class="modal-footer">
                            <table style="border-collapse: collapse; width: 100%;" border="0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 25%; text-align: right;" colspan="2"><button type="submit" class="btn btn-primary btn-sm">Kemaskini</button>&nbsp;</td>
                                            <td style="width: 25%; text-align: left;" colspan="2">&nbsp;<a href="{{route('list.test')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Tutup</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                      </form>
                    </div>
            </div>
    </div>

    <!-- medium modal Kekal -->
    <div class="modal fade BigModal" id="mediumModalKekal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelKekal"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-light bg-dark">
                    <h5 class="modal-title" id="exampleModalLabelKekal">Fungsi Keberhasilan</h5>  
                    </div>
                    <form id = "testedit" method="POST" action="{{ route('kekal1.test2', $test->id) }}" enctype="multipart/form-data">
                      @csrf
                     
                        <div class="modal-body" id="mediumBodyKekal">
                            <div>
                                <!-- the result to be displayed apply here -->
                            </div>
                        </div>
                            <div class="modal-footer">
                            <table style="border-collapse: collapse; width: 100%;" border="0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 25%; text-align: right;" colspan="2"><button type="submit" class="btn btn-primary btn-sm">Simpan</button>&nbsp;</td>
                                            <td style="width: 25%; text-align: left;" colspan="2">&nbsp;<a href="{{route('list.test')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Tutup</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                      </form>
                    </div>
            </div>
    </div>

    <!-- medium modal Pinda -->
    <div class="modal fade BigModal" id="mediumModalPinda" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelPinda"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header text-light bg-dark">
                    <h5 class="modal-title" id="exampleModalLabelPinda">Fungsi Keberhasilan</h5>  
                    </div>
                    <form id = "testedit" method="POST" action="{{ route('pinda1.test2', $test->id) }}" enctype="multipart/form-data">
                      @csrf
                     
                        <div class="modal-body" id="mediumBodyPinda">
                            <div>
                                <!-- the result to be displayed apply here -->
                            </div>
                        </div>
                            <div class="modal-footer">
                            <table style="border-collapse: collapse; width: 100%;" border="0">
                                    <tbody>
                                        <tr>
                                            <td style="width: 25%; text-align: right;" colspan="2"><button type="submit" class="btn btn-primary btn-sm">Simpan</button>&nbsp;</td>
                                            <td style="width: 25%; text-align: left;" colspan="2">&nbsp;<a href="{{route('list.test')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Tutup</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                      </form>
                    </div>
            </div>
    </div>
    
    <!-- medium modal Gugur -->
    <div class="modal fade BigModal" id="mediumModalGugur" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabelGugur"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-light bg-dark">
                <h5 class="modal-title" id="exampleModalLabelGugur">Fungsi Keberhasilan</h5>  
                </div>
                <form id = "testedit" method="POST" action="{{ route('gugur1.test2', $test->id) }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="modal-body" id="mediumBodyGugur">
                        <div>
                            <!-- the result to be displayed apply here -->
                        </div>
                    </div>
                        <div class="modal-footer">
                        <table style="border-collapse: collapse; width: 100%;" border="0">
                                <tbody>
                                    <tr>
                                        <td style="width: 25%; text-align: right;" colspan="2"><button type="submit" class="btn btn-primary btn-sm">Simpan</button>&nbsp;</td>
                                        <td style="width: 25%; text-align: left;" colspan="2">&nbsp;<a href="{{route('list.test')}}" class="btn btn-info btn-sm" role="button" aria-pressed="true">Tutup</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    

  
 

  