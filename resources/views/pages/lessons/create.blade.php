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
                    <form action="{{route('lessons.store')}}" method="post" enctype='multipart/form-data'>
                        @csrf
                        <div class="flex flex-col space-y-4">
                            <div>
                                <input name="title" class="w-full border rounded p-2" placeholder="Lesson title"/>
                            </div>
                            <div>
                                <input name="number" class="w-full border rounded p-2" placeholder="Lesson number"/>
                            </div>
                            <div>
                                <x-trix-field id="description" name="description" placeholder="Lesson description"/>
                            </div>
{{--                            <div>--}}
{{--                                <textarea name="head" class="w-full border rounded p-2" placeholder="Head content"></textarea>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <textarea name="body" class="w-full border rounded p-2" placeholder="Body content"></textarea>--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <textarea name="foot" class="w-full border rounded p-2" placeholder="Footer content"></textarea>--}}
{{--                            </div>--}}
                            <div>
                                <input name="style" class="w-full border rounded p-2" type="checkbox"/>
                            </div>

                            <div>
                                <textarea id="html" class="w-full" name="html" placeholder="Default html"></textarea>
                            </div>

                            <div>
                                <textarea id="css" class="w-full" name="css" placeholder="Default styles"></textarea>
                            </div>

                            <div class="w-full flex justify-end">
                                <button class="bg-indigo-600 text-white px-4 py-1 rounded-sm" type="submit" class="btn-wide" color="primary">Create</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

