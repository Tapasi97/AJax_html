document.addEventListener("DOMContentLoaded", function () {
  var rangeSlider = document.getElementById("range-slider");

  noUiSlider.create(rangeSlider, {
    start: [20, 60],
    connect: true,
    range: {
      min: 0,
      max: 100,
    },
    tooltips: true,
    format: {
      to: function (value) {
        return Math.round(value);
      },
      from: function (value) {
        return Number(value);
      },
    },
  });

  // Handle range change (e.g., filter data)
  rangeSlider.noUiSlider.on("update", function (values, handle) {
    let minAge = values[0];
    let maxAge = values[1];
    console.log("Age range:", minAge, "-", maxAge);
    // Add your filtering logic here
  });
});
