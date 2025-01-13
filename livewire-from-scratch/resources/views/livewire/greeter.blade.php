<div>
    <div>
        <!-- here we place the name from the Greeter.php -->
    Hello, {{ $name }}!
    </div>
    <form 
        wire:submit="changeName(document.getElementById('newName').value)"

    
    >
    <div class="mt-2">
        <!-- enter name in changeName() to change the name to that value on click -->
        <input 
        id = "newName"
        type="text" 
        class="block w-full p-4 border rounded-md bg-gray-700 text-white"
        placeholder="Enter new name"
        
    >
     
    </div>


    <div class="mt-2">
        <!-- enter name in changeName() to change the name to that value on click -->
        <button type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
        >
            Click me
        </button>
    </div>
    </form>
</div>
