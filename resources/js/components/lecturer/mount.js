import {createApp} from 'vue';

import CreateTopic from "./CreateTopic.vue";

createApp(CreateTopic).mount("#createTopic")

import "../iconLibrary";
import Index from "./index.vue";
import LectRouter from "./LecturerRouter";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

const index = createApp(Index)
index.use(LectRouter)
index.component('font-awesome-icon', FontAwesomeIcon)
index.mount("#index");
