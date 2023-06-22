<x-rapidez-ct::title-progress-bar href="/cart">
    @lang('Credentials')
</x-rapidez-ct::title-progress-bar>

<form
    id="credentials"
    v-on:submit.prevent="save(['credentials'], 3)"
>
    <x-rapidez-ct::sections>
        @include('rapidez-ct::checkout.partials.sections.login')
        @include('rapidez-ct::checkout.partials.sections.address')
        @include('rapidez-ct::checkout.partials.sections.shipping')
    </x-rapidez-ct::sections>
</form>

<x-rapidez-ct::toolbar>
    <x-rapidez-ct::button.outline href="/cart">
        @lang('Back to cart')
    </x-rapidez-ct::button.outline>
    <x-rapidez-ct::button.enhanced form="credentials">
        @lang('Next')
    </x-rapidez-ct::button.enhanced>
</x-rapidez-ct::toolbar>
