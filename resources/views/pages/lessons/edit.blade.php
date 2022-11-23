<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create new lesson') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form action="{{route('lessons.update', $lesson->id)}}" method="POST" enctype='multipart/form-data'>
                        @csrf
                        @method('PUT')
                        <div class="flex flex-col space-y-4">
                            <div>
                                <input name="title" value="{{ $lesson->title ?? '' }}" class="w-full" placeholder="Lesson title"/>
                            </div>
                            <div>
                                <input name="number" value="{{ $lesson->number ?? '' }}" class="w-full" placeholder="Lesson number"/>
                            </div>
                            <div>
                                <x-trix-field id="description" name="description" value="{!! $lesson->description ?? '' !!}" placeholder="Lesson description" />
                            </div>
{{--                            <div>--}}
{{--                                <textarea name="head" class="w-full" placeholder="Head content">{{ $lesson->head ?? '' }}</textarea>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <textarea name="body" class="w-full" placeholder="Body content">{{ $lesson->body ?? '' }}</textarea>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <textarea name="foot" class="w-full" placeholder="Footer content">{{ $lesson->foot ?? '' }}</textarea>--}}
{{--                            </div>--}}
                            <div>
                                <input name="style" class="w-full border rounded p-2" type="checkbox" @if ($lesson->style === 1) checked @endif/>
                            </div>
                            <div>
                                <textarea id="html" class="w-full" name="html" placeholder="Default html">{{ $lesson->html ?? '' }}</textarea>
                            </div>
                            <div>
                                <textarea class="w-full" id="css" name="css" placeholder="Default styles">{{ $lesson->css ?? '' }}</textarea>
                            </div>
                            <div class="w-full flex justify-end">
                                <button class="bg-indigo-600 text-white px-4 py-1 rounded-sm" type="submit" class="btn-wide">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

