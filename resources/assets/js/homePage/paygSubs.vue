<template>
    <div>
      <div class="pt-5 section-feature">
        <div class="text-center">
          <ul class="" v-for="storage in storageList" :key="storage.id">
            <li>{{storage.desc}}</li>
            <li>{{storage.price}}</li>
          </ul>
          <!-- Row One -->
          <div class="row">
            <h1 class="description col-md-12 text-center ">Storage Capacity</h1>
            <table class="table">
              <caption class="mx-3 text-dark">*The storage slot you purchase will be a 
                recurring cost added to your monthly statements. Note: once activated this action cannot be undone. 
                For more information please reach our assistance.</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Storage Capacity</th>
                  <th scope="col">Price (LKR)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">First 500 MB</th>
                  <td>Free</td>
                </tr>
                <tr>
                  <th scope="row">+ 500 MB additional storage</th>
                  <td>500</td>
                </tr>
                <tr>
                  <th scope="row">+ 02 GB additional storage</th>
                  <td>1,600</td>
                </tr>
                <tr>
                  <th scope="row">+ 05 GB additional storage</th>
                  <td>3000</td>
                </tr>
              </tbody>
            </table>

          </div>

          <!-- Row Two -->
          <div class="row ">
            <h1 class="description col-md-12 text-center">Student Enrollments</h1>
            <table class="table">
              <caption class="mx-3 text-dark">*The student slot you purchase will become a 
                recurring cost added to your monthly statements. Note: once activated, this action cannot be undone. 
                For more information please reach our assistance.</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Student Enrollments</th>
                  <th scope="col">Price (LKR)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">First 25 students</th>
                  <td>Free</td>
                </tr>
                <tr>
                  <th scope="row">+ 25 additional students</th>
                  <td>2,500</td>
                </tr>
                <tr>
                  <th scope="row">+ 100 additional students</th>
                  <td>3,999</td>
                </tr>
                <tr>
                  <th scope="row">+ 200 additional students</th>
                  <td>4,499</td>
                </tr>
                <tr>
                  <th scope="row">+ 250 additional students</th>
                  <td>7,999</td>
                </tr>
                <tr>
                  <th scope="row">+ 500 additional students</th>
                  <td>9,999</td>
                </tr>
              </tbody>
            </table>
          </div>

          <!-- Row Three -->
          <div class="row ">
            <h1 class="description col-md-12 text-center">Staff Accounts</h1>
            <table class="table">
              <caption class="mx-3 text-dark">*The staff account slot you purchase will become a 
                recurring cost added to your monthly statements. Note: once activated, this action cannot be undone. 
                For more information please reach our assistance.</caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Staff Accounts</th>
                  <th scope="col">Price (LKR)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">01 staff account</th>
                  <td>Free</td>
                </tr>
                <tr>
                  <th scope="row">+ 01 additional staff account</th>
                  <td>500</td>
                </tr>
              </tbody>
            </table>
          </div>
          
          <!-- Row Four -->
          <div class="row ">
            <h1 class="description col-md-12 text-center">Personalized Subdomain</h1>
            <table class="table">
              <caption class="mx-3 text-dark">
                *This purchase will become a recurring cost added to your monthly statements. 
                Note: once you cancel this operation, your registered subdomain cannot be retrieved or 
                used again by you or another party. For more information please reach our assistance.
              </caption>
              <thead class="thead-dark">
                <tr>
                  <th scope="col">Subdomains</th>
                  <th scope="col">Price (LKR)</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Activate Personalized Subdomain</th>
                  <td>1,000</td>
                </tr>
              </tbody>
            </table>
          </div>

        </div>
        
      </div>
    </div>
</template>

<script>
    export default {
      data: function(){
            return {
              csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
              storageList: {},
            }
        },
        methods:{
            loadStorage() {
              axios.get("api/storage").then(({data}) => (this.storageList = data.storage));
            }
        },
        created() {
          this.loadStorage();
        }
    }
</script>
