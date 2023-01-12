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
 
 <div style="position: relative; top: 60px; right: -150px">
    <form action="{{url('/uploadfood')}}" method="post" enctype="multipart/form-data">

        @csrf

        <div>
            <label>Title</label>
            <input style="color=blue;" type="text" name="title" placeholder="write a title" required>
        </div>
        <div>
            <label>Price</label>
            <input style="color=blue;" type="num" name="price" placeholder="price" required>
        </div>
        <div>
            <label>Image</label>
            <input style="color=blue;" type="file" name="image" required>
        </div>
        <div>
            <label>Description</label>
            <input style="color=blue;"  type="text" name="description" placeholder="Description" required>
        </div>
        <div>
            <input style="color:red;" type="submit" value="save">
        </div>
        </form>
        <div>
            <table bgcolor="black">
              <tr>

              <th style="padding: 30px">Food menu</th>
              <th style="padding: 30px">Price</th>
              <th style="padding: 30px">Description</th>
              <th style="padding: 30px">Image</th>
              <th style="padding: 30px">Action</th>
              </tr>

              @foreach($data as $data)

              <tr align="center">
                <th>{{$data->title}}</th>
                <th>{{$data->price}}</th>
                <th>{{$data->description}}</th>
                <th><img height="200" width="200" src="/foodimage/{{$data->image}}"></th>
                <th><a href="{{url('/deletemenu',$data->id)}}">Delete</a></th>
                <th><a href="{{url('/updateview',$data->id)}}">Update</a></th>
            </tr>

              @endforeach
            </table>
        </div>



    
 </div>



 @include('admin.adminscript')

</body>

</html>