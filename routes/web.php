<?php
use App\Models\About;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Excel;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Concerns\FromCollection;




Route::get('/', function () {
    return view('home', ['title'=>'Home Page']);
});

Route::get('/about', function () {
    return view('about',['title'=>'About', 'datas'=>About::all()]);
});

Route::get('/about/{data_slug:slug}', function(About $data_slug){
    return view('detail_about', ['title' => $data_slug['nama'], 'post' => $data_slug]);
});

// Route::get('/toexcel', function () {
    

//     $data = [
//         [
//             'id'   => 1,
//             'nama' => 'Muhammad',
//              'tanggal_lahir' => '14 Februari 1998 '
//         ],
//         [
//             'id'   => 2,
//             'nama' => 'Fahmi',
//             'tanggal_lahir' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam commodi dicta quisquam officia veritatis maxime quos sapiente magni ab voluptatem eum aperiam, amet, fuga quidem optio praesentium eaque. Perferendis, magnam.'
//         ]
//     ];

    
// });


