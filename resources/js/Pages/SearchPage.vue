<template>
  <layout>
    <!-- <div class="container py-5"> -->
    <div class="search-page-container row mt-5">
      <div class="col-2 categories p-2">
        <div class="perScrollbarsottoi750">
        <div class="after">
          <div class="where d-flex align-items-center p-2">
            <img src="../../../public/img/logo-categories.png" alt="" />
            <h5 class="m-0">Roma</h5>
          </div>
        </div>
        <!-- after -->
        <h5 class="my-3">Categorie</h5>
        <div class="check my-2" v-for="category in categories" :key="category.id">
          <input
            type="checkbox"
            @change="check($event)"
            v-model="categoryFilter"
            :id="category.name"
            :name="category.name"
            :value="category.id"
          />
          <label :for="category.name"
            >{{ category.name }} ({{ category.users.length }})</label
          >
        </div>
        </div>
      </div>
      <div class="col restaurants mb-5">
        <h2 class="mb-4">Ristoranti che consegnano a Roma</h2>
        <div class="container-card" v-if="this.users.length == 0">
          <h3>Nessun ristorante trovato</h3>
          <!-- card -->
        </div>
        <div class="container-card">
          <RestaurantCard :element="user" v-for="user in users" :key="user.id" />
        </div>

        <div class="paginate">
          <ul class="page-wrap d-flex justify-content-center rounded mt-4">
            <li
              :class="[currentPage === n ? 'bkg-page' : 'page']"
              @click="fetchFilters(categoryFilter, n)"
              v-for="n in lastPage"
              :key="n"
            >
              {{ n }}
            </li>
          </ul>
        </div>
      </div>
    </div>

    <!-- </div> -->
  </layout>
</template>

<script>
import axios from "axios";
import Layout from "../layouts/Layout.vue";
import RestaurantCard from "../components/RestaurantCard.vue";

export default {
  components: {
    Layout,
    RestaurantCard,
  },
  data() {
    return {
      users: [],
      categories: [],
      // filteredUsers: [],
      lastPage: 0,
      currentPage: 1,
      userCategories: [],
      categoryFilter: [],
      loading: false,
    };
  },
  methods: {
    fetchRestaurant(page = 1) {
      axios
        .get("/api/users", {
          params: {
            page,
          },
        })
        .then((res) => {
          const { users } = res.data;
          const { data, last_page, current_page } = users;
          this.users = data;
          this.lastPage = last_page;
          this.currentPage = current_page;
        })
        .catch((err) => {
          console.warn(err);
          this.$router.push("/404");
        });
    },

    fetchCategories() {
      axios
        .get("/api/categories")
        .then((res) => {
          const { categories } = res.data;
          this.categories = categories;
        })
        .catch((err) => {
          console.warn(err);
          this.$router.push("/404");
        });
    },

    fetchFilters(category, page = 1) {
      axios
        .get("/api/users", {
          params: {
            category: category,
            page,
          },
        })
        .then((res) => {
          const { users } = res.data;
          const { data, last_page, current_page } = users;
          this.users = data;
          this.lastPage = last_page;
          this.currentPage = current_page;
        })
        .catch((err) => {
          console.warn(err);
          this.$router.push("/404");
        });
    },

    check(event) {
      if (event.target.checked) {
        this.fetchFilters(this.categoryFilter);
      } else if (this.categoryFilter == "") {
        this.fetchRestaurant();
      } else {
        this.fetchFilters(this.categoryFilter);
      }
    },
  },

  mounted() {
    this.fetchRestaurant();
    this.fetchCategories();
  },
};
</script>

<style lang="scss" scoped>
.search-page-container {
  margin: 0;
  padding: 0 15px 0 15px;
}

.where {
  width: 95px;
  gap: 10px;
  // position: sticky !important;
  // top: 10px;
}

.after::after {
  content: "";
  display: block;
  border: 1px solid #e9e8e8;
  width: 100%;
}

.categories {
  min-width: 180px;
  max-height: calc(100vh - 50px);
  overflow: auto;
  margin-left: 40px;
}

.container-card {
  display: flex;
  flex-wrap: wrap;
  gap: 10px;
}

.page-wrap {
  gap: 15px;

  .page {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    background-color: #077567;
    display: flex;
    justify-content: center;
    color: white;
    align-items: center;
    cursor: pointer;
  }

  .bkg-page {
    background-color: #edae89;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    justify-content: center;
    align-items: center;
    border: 2px solid #077567;
    color: #077567;
    cursor: pointer;
  }
}

@media (max-width: 1200px) {
  .restaurants {
    margin-left: 20px !important;
  }
}
 

@media (max-width: 750px) {
  .categories {
    display: block;
    font-size: 13px;
    height: 200px;
  min-width: 100%;
  background-color: #f8fafc;
  margin-left: 0 !important;
  
  
  }
  .perScrollbarsottoi750{
     max-height: 200px;
    width: 2400px;
  }
  .check {
    display: inline-block !important;
    padding: 7px;
    border: 2px solid #E9EBEB;
    border-radius: 5px;
    margin-bottom: 0 !important;
    margin-right: 10px;
  }
  input{
    padding-top: 100px !important;
  }
  label{
    margin: 0 !important;
  }
  .row{
    display: flex;
    flex-direction: column;
  }
  .restaurants {
    margin-left: 10px !important;
  }
}
</style>
