<!--begin::Input group-->
<div>
    @if($label)
        <x-html.form.label :label="'Title'" :required="true" />
    @endif

    <!--begin::Editor-->
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        @if($required)
            required="required"
        @endif
        class="tox-target">
        {{ $value }}
    </textarea>
    <!--end::Editor-->

    @if($obs)
        <x-html.form.obs :message="$obs" />
    @endif

    @error($name)
        <x-html.form.error :message="$message" />
    @enderror
</div>
<!--end::Input group-->
