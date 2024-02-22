import { Cpu } from "./Cpu.js"
import { CpuzRepository } from "./CpuzRepository.js";

const app = {
    data() {
        return {
            listeCpu: [],
            stockCpu:0,
            selected: '',
            
        }


    },

    async mounted() {
            this.listeCpu = await CpuzRepository.fetchUrl();
                    console.log(this.listeCpu);
    },
    methods: {
        modifStock(event) {
            let nbStock = event.target.dataset.modele;
            console.log(nbStock);
        }
}

}


Vue.createApp(app).mount('#app');