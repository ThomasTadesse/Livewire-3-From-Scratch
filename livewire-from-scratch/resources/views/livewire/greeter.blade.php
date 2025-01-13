<div>
    <div>
        <!-- here we place the name from the Greeter.php -->
    Hello, {{ $name }}!
    </div>
    <!-- input property is bound to the input value, so blank here is fine -->
    <form 
        wire:submit="changeName()"

    
    >
    <div class="mt-2">
        <!-- by placing the model here for name, it could be used easier -->
         <!-- by adding .live to the model, it will update realtime -->
          <!-- by adding debounce after it will delay for about 150ms -->
           <!-- you get the rest -->
        <select 
            type="text" 
            class="p-4 border rounded-md bg-gray-700 text-white"
            placeholder="Enter new name"
            wire:model.live="name"
        
    >
        <option value="John">hello</option>
        <option value="Doe">welcome, mr.</option>
        <option value="Jane">heya</option>
        <option value="Smith">welcome, mrs.</option>
    </select>
    <input 
            type="text" 
            class="p-4 border rounded-md bg-gray-700 text-white"
            placeholder="Enter new name"
            wire:model.live.debounce.1000ms="name"
        
    >
     
    </div>


    <div class="mt-2">
        <button type="submit"
                class="text-white font-medium rounded-md px-4 py-2 bg-blue-600"
        >
            Click me
        </button>
    </div>
    </form>
</div>
