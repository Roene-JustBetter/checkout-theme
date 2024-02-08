<x-rapidez-ct::title-progress-bar :href="route('cart')">
    @lang('Credentials')
</x-rapidez-ct::title-progress-bar>

<form id="credentials" v-on:submit.prevent="save(['credentials'], 3)">
    <x-rapidez-ct::sections>
        @include('rapidez-ct::checkout.partials.sections.login')
        @include('rapidez-ct::checkout.partials.sections.address')
        @include('rapidez-ct::checkout.partials.sections.newsletter')
        @include('rapidez-ct::checkout.partials.sections.shipping')
    </x-rapidez-ct::sections>
</form>

<x-rapidez-ct::toolbar>
    <x-rapidez-ct::button.outline :href="route('cart')">
        @lang('Back to cart')
    </x-rapidez-ct::button.outline>

    <x-rapidez-ct::button.accent form="credentials" loader>
        @lang('Next')
    </x-rapidez-ct::button.accent>
</x-rapidez-ct::toolbar>
