var $range = $("#js-range-slider__price"),
    $inputFrom = $("#js-input-from__price"),
    $inputTo = $("#js-input-to__price"),
    instance,
    min = 1055,
    max = 10331;
var $range = $("#js-range-slider__thickness"),
    $inputFrom = $("#js-input-from__thickness"),
    $inputTo = $("#js-input-to__thickness"),
    instance,
    min = 6,
    max = 18;

$("#js-range-slider__price").ionRangeSlider({
    skin: "round",
    type: "double",
    min: 1055,
    max: 10331,
    onStart: updateInputs,
    onChange: updateInputs
});
instance = $range.data("ionRangeSlider");

function updateInputs(data) {
    from = data.from;
    to = data.to;

    $("#js-input-from__price").prop("value", from);
    $("#js-input-to__price").prop("value", to);
}
$inputFrom.on("input", function () {
    var val = $(this).prop("value");

    // validate
    if (val < min) {
        val = min;
    } else if (val > to) {
        val = to;
    }

    instance.update({
        from: val
    });
    $(this).val((i, v) => Math.max(this.min, Math.min(this.max, v)));
});
$inputTo.on("input", function () {
    var val = $(this).prop("value");

    // validate
    if (val < from) {
        val = from;
    } else if (val > max) {
        val = max;
    }

    instance.update({
        to: val
    });

    $(this).val((i, v) => Math.max(this.min, Math.min(this.max, v)));
});
$range.ionRangeSlider({
    skin: "round",
    type: "double",
    min: min,
    max: max,
    onStart: updateInputs,
    onChange: updateInputs
});