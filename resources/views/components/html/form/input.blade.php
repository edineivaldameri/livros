<!--begin::Input group-->
<div class="mb-10 fv-row fv-plugins-icon-container">
    @if($label)
        <x-html.form.label :label="$label" :required="true" />
    @endif

    <!--begin::Input-->
    <input
        type="{{ $type }}"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ $value }}"
        @if($required)
            required="required"
        @endif
        class="form-control mb-2"
        @if($placeholder)
            placeholder="{{ __($placeholder) }}"
        @endif
        @if(!$inputmode)
            inputmode="{{ $inputmode }}"
        @endif
        >
    <!--end::Input-->

    @if($obs)
        <x-html.form.obs :message="$obs" />
    @endif

    @error($name)
        <x-html.form.error :message="$message" />
    @enderror
</div>
<!--end::Input group-->
