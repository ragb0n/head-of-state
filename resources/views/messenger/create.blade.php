@extends('messages')

@section('content')
    <h1>Napisz nową wiadomość</h1>
    <form action="{{ route('messages.store') }}" method="post">
        {{ csrf_field() }}
        <div class="col-md-6">
            <!-- Subject Form Input -->
            <div class="form-group">
                <label class="control-label">Temat</label>
                <input type="text" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded
                transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="subject" placeholder="Temat wiadomości"
                       value="{{ old('subject') }}" required>
            </div>

            <label class="control-label">Odbiorca</label>
            @if($users->count() > 0)
            <select class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition
            ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" name="recipients[]" required>
                @foreach($users as $user)
                    <option value="{{ $user->id }}" name="recipients[]">{!!$user->username!!}</label>
                @endforeach
                    </select>
            @endif

            <!-- Message Form Input -->
            <div class="form-group">
                <label class="control-label">Treść</label>
                <textarea name="message" class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
                rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none resize-none" required>{{ old('message') }}</textarea>
            </div>
    
            <!-- Submit Form Input -->
            <div class="form-group">
                <button type="submit" class="btn btn-primary form-control inline-flex items-center px-4 py-2 bg-gray-800 border
                border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 
                active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 
                transition ease-in-out duration-150 ml-3 mb-5 mt-5">Wyślij</button>
            </div>
        </div>
    </form>
@stop
