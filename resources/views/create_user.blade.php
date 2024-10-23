@extends('layouts.app')

@section('content')
    <div style="display: flex; justify-content: center; align-items: center; height: 100vh; background-color: #f5f7fa;">
        <div style="background-color: #ffffff; padding: 25px 30px; border-radius: 10px; box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1); width: 350px;">
            <h2 style="text-align: center; margin-bottom: 20px; font-size: 24px; color: #333; letter-spacing: 1px; font-weight: 500;">Form Pendaftaran</h2>
            <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="nama" style="font-size: 14px; color: #555; margin-bottom: 6px; display: block;">Nama:</label>
                <input type="text" id="nama" name="nama" placeholder="Masukkan nama Anda" required style="width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 14px; transition: all 0.3s ease;">
                
                <label for="kelas" style="font-size: 14px; color: #555; margin-bottom: 6px; display: block;">Kelas:</label>
                <select name="kelas_id" id="kelas_id" required style="width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 14px; transition: all 0.3s ease;">
                    <option value="">Pilih Kelas</option>
                    @foreach($kelas as $kelasItem)
                    <option value="{{$kelasItem->id}}">{{$kelasItem->nama_kelas}}</option>
                    @endforeach
                </select>

                
                <label for="ipk" style="font-size: 14px; color: #555; margin-bottom: 6px; display: block;">IPK:</label>
                <input type="text" id="ipk" name="ipk" placeholder="Masukkan IPK (misal: 3.50)" style="width: 100%; padding: 10px; margin: 8px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; font-size: 14px; transition: all 0.3s ease;">
        
                <label for="foto" style="font-size: 14px; color: #555; margin-bottom: 6px; display: block;">Foto:</label>
                <input type="file" id="foto" name="foto" style="width: 100%; margin: 8px 0;">
                
                <input type="submit" value="Submit" style="background-color: #4CAF50; color: white; padding: 12px; border: none; border-radius: 5px; cursor: pointer; font-size: 16px; width: 100%; margin-top: 15px; transition: background-color 0.3s ease;">
            </form>
        </div>
    </div>
@endsection
