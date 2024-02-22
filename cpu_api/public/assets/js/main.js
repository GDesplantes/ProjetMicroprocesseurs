import { Cpu } from "./Cpu.js"
import { CpuzRepository } from "./CpuzRepository.js";

const app = {
    data() {
        return {
            listeCpu: [],
            stockCpu:0
        }


    },

    async mounted() {
            this.listeCpu = await CpuzRepository.fetchUrl();
                    console.log(this.listeCpu);
    },
    methods: {
}

}


Vue.createApp(app).mount('#app');