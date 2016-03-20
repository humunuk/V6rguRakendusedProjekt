window.onload = function() {
    var beads = document.getElementsByClassName('bead');

    for(var i = 0; i < beads.length; i++) {
        var bead = beads[i];
        bead.onclick = function () {
            var pos = window.getComputedStyle(this).getPropertyValue("float");
            if (pos == 'right') {
                this.style.cssFloat = "left";
            } else {
                this.style.cssFloat = "right";
            }
        }
    }
};