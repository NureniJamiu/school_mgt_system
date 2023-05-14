<div class="flex h-screen justify-center mt-8 text-gray-200">
    <div>
        <h1 class="text-2xl font-bold mb-7">Update Student Info:</h1>

        <div>
            <form action="{{url('update', $student->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="my-2">
                    <label class="font-semibold">Name:</label>
                    <input type="text" name="name" value="{{$student->name}}" class="w-full py-2 mt-1 px-5 rounded bg-gray-200 bg-opacity-30 border-2 border-gray-400 focus:outline-none focus:border-gray-500">
                </div>

                <div class="my-2">
                    <label class="font-semibold">Email:</label>
                    <input type="email" name="email" value="{{$student->email}}" class="w-full py-2 mt-1 px-5 rounded bg-gray-200 bg-opacity-30 border-2 border-gray-400 focus:outline-none focus:border-gray-500">
                </div>

                <div class="my-5">
                    <label class="font-semibold">Old Image:</label>
                    <img src="/student/{{$student->image}}" alt="Student Image" width="120">
                </div>

                <div class="my-5">
                    <label class="font-semibold">Change Image:</label>
                    <input type="file" name="file">
                </div>

                <input type="submit" value="Update" class="bg-green-600 p-[10px] rounded text-gray-200 font-bold hover:bg-green-700">
            </form>
        </div>
    </div>

</div>