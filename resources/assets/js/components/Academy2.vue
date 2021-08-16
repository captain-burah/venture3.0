<template>
    <div>
 
        <!-- Body -->
        <div class="main main-raised border border-primary">
            <div class="container-fluid">
            
            <!---   Section 01  Features --->
                <div class="pt-1 section-feature pb-2" id="featureSection">
                    <div class="text-center">

                        <!-- Heading -->
                        Rows is: {{ rows }}
                        <div v-if="loading">
                            Loading Academics ....
                        </div>
                        <div v-else>
                            <div class="row py-2" 
                                v-for="row in rows" 
                                :key="'row' + row"
                            >
                                <div class="col d-flex align-items-stretch" 
                                    v-for="(academy, column) in academiesInRow(row)" 
                                    :key="'row' + row + column"
                                >
                                    <academics v-bind="academy" ></academics>
                                </div>
                                <div class="col" v-for="p in placeholdersInRow(row)" :key="'row' + p">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!---   /Section 01  Features --->

            </div>
        </div>
        <!-- Body -->
    </div>
</template>

<script>
 import Academics from "./academy/Academics";


export default ({
    // props: ['academic_url'],
    components: {
        Academics
    },

    data() {
        return {
            academies: null,
            loading: false,
            columns: 4
        };
    },
    computed: {
        rows () {
            return this.academies === null 
            ? 0 
            : Math.ceil(this.academies.length / this.columns);
        }
    },
    methods: {
        academiesInRow(row) {
            return this.academies.slice((row - 1) * this.columns, row * this.columns);
        },
        placeholdersInRow(row) {
            return this.columns - this.academiesInRow(row).length;
        },
    },

    created() {
        this.loading = true;
        const request = axios
        .get("/api/academies")
        .then(response => {
            this.academies = response.data.data;
            this.loading = false;
        });
    },
    
})
</script>