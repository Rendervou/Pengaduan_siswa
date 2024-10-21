<x-app-layout>
    <form action="{{ route('guru.update', $gurus->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
            
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">status</label>
                <select name="status" id="" class="w-full rounded-md border-gray-300">
                    <option value="">--Pilih Status--</option>
                    <option value="sedang dalam tinjauan">Sedang dalam tinjauan </option>
                    <option value="done">done</option>
                </select>
                
            </div>
        
        <button type="submit" name="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-gray-800 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
            Kirim
        </button>
    </form>

</x-app-layout>
