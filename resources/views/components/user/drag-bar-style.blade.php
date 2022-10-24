<style>
    input:checked+.tab-label .test {
        background-color: #000;
    }
    input:checked+.tab-label .test svg {
        /* transform: rotate(1deg); */
        stroke: #fff;
    }
    input:checked+.tab-label::after {
        /* transform: rotate(90deg); */
    }
    input:checked~.tab-content {
        max-height: 100vh;
    }
</style>