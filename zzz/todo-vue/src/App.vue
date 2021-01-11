<template>
  <div id="app">
    <h4 class="bg-primary text-white text-center p-2">
      Lista zadań użytkownika {{ name }}
    </h4>
    <div class="conteiner-fluid p-4">
      <div class="row">
        <div class="col font-weight-bold">Zadania</div>
        <div class="col-2 font-weight-bold">Zakończono?</div>
      </div>
      <div class="row" v-for="t in filteredTasks" v-bind:key="t.action">
        <div class="col">{{ t.action }}</div>
        <div class="col-2 text-center">
          <input type="checkbox" v-model="t.done" class="form-checkbox-input" />
          {{ t.done }}
        </div>
      </div>

      <div class="row py-2">
        <div class="col">
          <input v-model="newItemText" class="form-control">
        </div>
        <div class="col-2">
          <button class="btn btn-primary" v-on:click="addNewTodo">Dodaj nowe zadanie</button>
        </div>
      </div>

      <div class="row bg-secondary py-2 mt-2 text-white">
        <div class="col text-center">
          <input
            type="checkbox"
            v-model="hideCompleted"
            class="form-check-input"
          />
          <label for="" class="form-check-label font-weight-bold">
            Ukryj zadania ukończone
          </label>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "App",
  data() {
    return {
      name: "Paweł",
      tasks: [],
      hideCompleted: true,
      newItemText: ""
    };
  },
  computed: {
    filteredTasks() {
      return this.hideCompleted
        ? this.tasks.filter((t) => !t.done)
        : this.tasks;
    },
  },
  methods: {
    addNewTodo(){
      this.tasks.push({
        action: this.newItemText,
        done: false
      });
      localStorage.setItem("todos_vue",JSON.stringify(this.tasks));
      this.newItemText = "";
    }
  },
  created(){
    let data = localStorage.getItem("todos_vue");
    if(data !=null){
      this.tasks = JSON.parse(data);
    }
  }
};
</script>
