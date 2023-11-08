<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
    <style>
        body {
            background-image: url('img/iyah1.jpg');
            background-color: #A1887F;
            background-size: cover; 
            font-family: 'Lora', serif;
        }
        .header{
            position: fixed;
            width: 100%;
            top: 0;
            background-image: url('../img/iyah1.jpg');
            background-size: cover;
            padding: 15px; 
            z-index: 1000;
        }
        .nav{
            padding-right: 15px;
        }
        .mx-auto{
            margin-top:35px;
            width: 1000px;   
        }
        .card{
            margin-top:10px;
            background-color: #EFEBE9;
        }
        .card-header{
            background-color: #D7CCC8;

        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
            background-color: black;
            color: white;
        }
        
        form {
            margin-bottom: 20px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
        }
        
        input[type="text"],
        input[type="number"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .btn{
            margin-bottom:10px;
        }
    </style>
</head>
<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                LIST DATA
            </div>
            <div class="card-body">
                <table class="table">
                    <form action="/form/create" method="get">
                        <button type="submit" class="btn btn-secondary">New Form</button>
                        
                    </form>
                    
                <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Telepon</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Umur</th>
                            <th scope="col">Tanggal Lahir</th>
                            <th scope="col">Edit Action</th>
                            <th scope="col">Delete Action</th>
                        </tr>
                </thead>
                    <tbody>
                        @foreach($data as $form)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td scope="row">{{ $form->nama }}</td>
                                <td scope="row">{{ $form->alamat }}</td>
                                <td scope="row">{{ $form->telepon }}</td>
                                <td scope="row">{{ $form->gender }}</td>
                                <td scope="row">{{ $form->umur }}</td>
                                <td scope="row">{{ $form->tanggalLahir }}</td>
                                <td scope="row">
                                    <form action="/form/{{ $form->id }}/edit" method="get">
                                        <button type="submit" class="btn btn-secondary">Edit</button>                        
                                    </form>
                                </td>
                                <td scope="row">
                                    <form action="/form/{{ $form->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            <tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>