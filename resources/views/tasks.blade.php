@extends('layouts.app')

@section('title', 'zxzv')

@section('content')

    @if (session()->has('success'))
        <div>
            {{ session()->get('success') }}
        </div>
    @endif
    <div>
        <form action="{{ route('tasks.store') }}" method="POST">
            {{ csrf_field() }}
            <div>
                <label for="task">{{ __('messages.task') }}</label>
                <div>
                    <table>
                        <tr>
                            <td><input type="text" name="name"></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div>
                 <button type="submit">{{ __('messages.addtask') }}</button>
            </div>
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </form>
    </div>
    @if (count($tasks) == 0)
        <div>
            <h3>{{ __('messages.error') }}</h3>
        </div>
    @elseif (count($tasks) > 0)
        <div>
            <table>
                <thead>
                    <th>{{ __('messages.task') }}</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    @foreach ($tasks as $key => $task)
                        <tr>
                            <td>{{ $key = $key + 1 }}</td>
                            <td><div>{{ $task->name }}</div></td>
                            <td>
                                <form action="{{ route('tasks.destroy', $task->id) }}" method="POST">
                                   @csrf
                                   @method('DELETE')
                                    <button type="submit">
                                         {{ __('messages.delete') }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endif
@endsection
