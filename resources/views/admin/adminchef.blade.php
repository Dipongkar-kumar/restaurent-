<x-app-layout>
   
</x-app-layout>

<!DOCTYPE html>
<html lang="en">

<head>
  

  @include('admin.admincss')
</head>

<body>
<div class="container-scroller">

 @include('admin.navbar')

 <form action="{{url('/uploadchef')}}" method="Post" enctype="multipart/form-data">
    
    @csrf


    <div>
        <label>Name</label>
        <input style="color:blue;" type="text" name="name" required="" placeholder="Enter name">
    </div>
    <div>
        <label>speciality</label>
        <input  style="color:blue;"type="text" name="speciality" required="" placeholder="Enter the speciality">
    </div>
    <div>
        <input type="file" name="image" required="">
    </div>
    <div>
        <input type="submit" value="Save">
    </div>
 </form>

 <table>
    <tr bgcolor="black">
        <th style="padding: 30px; ">Chef Name</th>
        <th style="padding: 30px; ">Speciality</th>
        <th style="padding: 30px; ">Image</th>
        <th style="padding: 30px; ">Action</th>
        <th style="padding: 30px; ">Action2</th>
    </tr>

    @foreach($data as $data)
    <tr align="center">
        <th>{{$data->name}}</th>
        <th>{{$data->speciality}}</th>
        <th><img   height="100" width="100" src="/chefimage/{{$data->image}}" alt=""></th>
        <th><a href="{{url('/updatechef',$data->id)}}">update</a></th>

        <th><a href="{{url('/deletechef',$data->id)}}">Delete</a></th>
    </tr>

    @endforeach
 </table>
 
 @include('admin.adminscript')

</body>

</html>