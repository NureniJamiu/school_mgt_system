<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | Home</title>

    <style>
        body {
            background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
        }
        .glass {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 10px;
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
        }
    </style>
    @vite('resources/css/app.css')

</head>
<body>
    <div class="flex h-screen justify-center mt-20">
        <div>
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-center w-full">ALL STUDENTS</h1>
            </div>

            @if(session('success'))
                <div class="w-72 mx-auto bg-green-300 text-green-800 text-center" id="message">
                    {{ session('success') }}
                </div>
            @endif
            
            <div class="w-full text-center my-5">
                <form action="{{url('search')}}" method="GET" enctype="multipart/form-data">
                @csrf

                    <input type="search" name="search" placeholder="search for students..." class="w-80 mx-auto py-2 mt-1 px-5 rounded bg-gray-200 bg-opacity-30 border-2 border-gray-400 focus:outline-none focus:border-gray-500">

                    <input type="submit" value="Search" class="bg-green-700 p-[10px] rounded text-zinc-200 font-semibold hover:bg-green-800">
                </form>
            </div>
            

            <table class="table-auto glass min-w-fit mb-5 border-2 border-gray-400">
                <thead>
                    <tr>
                        <th class="px-4 py-5 border border-gray-400">Name</th>
                        <th class="px-4 py-5 border border-gray-400">Email</th>
                        <th class="px-4 py-5 border border-gray-400">Update</th>
                        <th class="px-4 py-5 border border-gray-400">Delete</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($data as $student)
                        <tr>
                            <td class="flex gap-5 items-center border border-gray-400 px-4 py-2">
                                <img src="/student/{{$student->image}}" alt="Student Image" class="w-8 h-8 rounded-full">
                                <span>{{$student->name}}</span>
                            </td>
                            <td class="border border-gray-400 px-4 py-2">{{$student->email}}</td>
                            <td class="border border-gray-400 px-4 py-2 bg-green-400 cursor-pointer hover:bg-green-500">
                                <a href="{{url('update_page', $student->id)}}">update</a>
                            </td>
                            <td class="border border-gray-400 px-4 py-2 bg-red-400 cursor-pointer hover:bg-red-500">
                            <a href="{{url('delete', $student->id)}}">delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
            <a href="{{url('register')}}">
                <p class="flex justify-center items-center w-12 h-12 bg-green-700 rounded-full text-zinc-50 font-bold text-2xl float-right transition-all duration-100 ease-in hover:bg-green-800"> + </p>
            </a>

        </div>
    </div>
    <script>
        // Set a timer to hide the success message after 5 seconds
        setTimeout(()=> {
            var successMessage = document.getElementById('message');
            successMessage.style.display = 'none';
        }, 1500);
    </script>
</body>
</html>