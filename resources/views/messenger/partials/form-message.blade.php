<h2>Dodaj nową wiadomość</h2>
<form action="{{ route('messages.update', $thread->id) }}" method="post">
    {{ method_field('put') }}
    {{ csrf_field() }}
        
    <!-- Message Form Input -->
    <div class="form-group">
        <textarea name="message" class="form-control resize-none">{{ old('message') }}</textarea>
    </div>

    <!-- Submit Form Input -->
    <div class="form-group">
        <button type="submit" class="btn btn-primary form-control inline-flex items-center px-4 py-2 bg-gray-800 border
         border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 
         active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 
         transition ease-in-out duration-150 ml-3">Wyślij</button>
    </div>
</form>