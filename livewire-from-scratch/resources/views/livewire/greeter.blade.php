<div>
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
            wire:model.fill="greeting"
    >
<!-- by adding fill you will automatically get the first option by default -->
        <option value="hello">Hello</option>
        <option value="hi">Hi</option>
        <option value="hey">Hey</option>


    </select>
    <input 
            type="text" 
            class="p-4 border rounded-md bg-gray-700 text-white"
            wire:model="name"
        
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
    @if ($name != '')
    <div>
        <!-- here we place the greeting and name from the Greeter.php -->
        {{ $greeting }}, {{ $name }}!
    </div>
    @endif
</div>
