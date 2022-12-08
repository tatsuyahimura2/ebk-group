                 
<div class="container">
    <input type="hidden" name="id" value="{{$data['id']}}">
    <table style="border-collapse: collapse; width: 99.1206%; height: 71px;" border="1">
        <tbody>
        <tr style="height: 36px;">
        <tr>
            <td style="width: 25%; text-align: center;" colspan="4">
            <b>Bidang Tugas / Fungsi</b>
            </td>
        </tr>
        <tr>
            <td style="width: 25%;" colspan="4">&nbsp;<textarea class="form-control" name="bidang_tugas" value="" >{{$data['bidang_tugas']}}</textarea></td>
        </tr>
            <td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div>Sasaran Keberhasilan</div>
            </div>
            </td>
            <td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div>Pencapaian Semasa</div>
            </div>
            </td>
            <!--<td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div>Penilaian Pertama</div>
            </div>
            </td>
            <td style="width: 20%; text-align: center; height: 36px;">
            <div>
            <div>Status Sasaran</div>
            </div>
            </td>
            </tr>-->
        <tr style="height: 18px;">
            
            <td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="sasaran" type="text" value="{{$data['sasaran']}}" /></td>
            <td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="pencapaian_1" type="number" value="{{$data['pencapaian_1']}}" /></td>
            <!--<td style="width: 20%; height: 18px; text-align: center;"><input class="form-control" name="penilaian_1" type="number" value="{{$data['penilaian_1']}}" /></td>-->
        
        </tr>
        </tbody>
    </table>
                
            
</div>

