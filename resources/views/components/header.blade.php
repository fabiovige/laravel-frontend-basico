<div class="px-12 flex flex-row items-center justify-between py-4 w-full border-b border-solid border-gray-300">
    <div class="flex flex-row -mt-5">
        <img class="w-48" src="{{ $logo }}" />
    </div>

    <div class="hidden md:flex flex-row items-center space-x-0.5">
        <x-form.input name="pesquisar" type="text" size="medium" placeholder="Pesquisar" icon="search"
            iconPosition="right"></x-form.input>
        <x-form.button type="button" variation="primary" size="medium" icon="search" iconPosition="left">
        </x-form.button>
    </div>

    <div class="flex flex-row items-center space-x-0.5">
        <x-form.button type="button" variation="primary" size="medium" icon="search" iconPosition="left"
            class="flex md:hidden"></x-form.button>
        <x-form.button type="button" variation="primary" size="medium" icon="person" iconPosition="left" text="Login">
        </x-form.button>
        <x-form.button type="button" variation="outline" size="medium" icon="shopping_cart" iconPosition="left">
        </x-form.button>
    </div>
</div>