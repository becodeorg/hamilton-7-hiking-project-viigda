<div class="flex flex-col items-center w-full">
    <h1 class="text-center text-[45px] mt-16 font-bold">Create New Hike</h1>
    <div class="w-[70%] m-auto max-w-[600px] mb-7">
        <form action="/create" method="post" class="border-2 border-Old-mauve shadow-lg py-8 pt-10 mt-2 rounded flex flex-col items-center justify-center">
            <div class="flex flex-col w-[80%]">
                <label for="name">Name :</label>
                <input class="my-2 p-1 rounded mb-8 border-2" type="text" name="name" id="name">
            </div>
            <div class="flex flex-col w-[80%]">
                <label for="distance">Distance :</label>
                <input class="my-2 p-1 rounded mb-8 border-2" type="number" name="distance" id="distance">
            </div>
            <div class="flex flex-col w-[80%]">
                <label for="duration">Duration :</label>
                <input class="my-2 p-1 rounded mb-8 border-2" type="number" name="duration" id="duration">
            </div>
            <div class="flex flex-col w-[80%]">
                <label for="elevation">Elevation :</label>
                <input class="my-2 p-1 rounded mb-8 border-2" type="number" name="elevation" id="elevation">
            </div>
            <div class="flex flex-col w-[80%]">
                <label for="description">Description :</label>
                <textarea class="my-2 p-1 rounded mb-8 border-2" type="text" name="description" id="description"></textarea>
            </div>
            <button type="submit" class="bg-Tomato mt-10 px-8 py-2 rounded-md hover:opacity-80 text-white">Create</button>
        </form>
    </div>
</div>