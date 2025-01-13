<div>
    <div>
        <!-- here we place the name from the Greeter.php -->
    Hello, {{ $name }}!
    </div>
    <div class="mt-2">
        <!-- enter name in changeName() to change the name to that value on click -->
        <input 
        id = "newName"
        type="text" 
        class="block w-full p-4 border rounded-md bg-gray-700 text-white"
        
    >
     
    </div>


    <div class="mt-2">
        <!-- enter name in changeName() to change the name to that value on click -->
        <button class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
                wire:click="changeName(document.getElementById('newName').value)"
        >
            Click me
        </button>
    </div>
</div>
