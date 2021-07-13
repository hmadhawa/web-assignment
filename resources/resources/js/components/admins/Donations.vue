<template>
    <div class="layout-px-spacing">
        <div class="row layout-top-spacing">
            <div class="row col-12">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                    <div class="widget-two">
                        <div class="widget-content">
                            <div class="w-numeric-value">
                                <div class="w-content">
                                    <span class="w-value">Donations</span>
                                    <span class="w-numeric-title">Go to columns for details.</span>
                                </div>

                            </div>

                        </div>

                        <div  style="margin:50px">
                            <div class="widget-content">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="text-center"><div class="th-content">Count</div></th>
                                                <th class="text-center"><div class="th-content">First Name</div></th>
                                                <th class="text-center"><div class="th-content">Last Name</div></th>
                                                <th class="text-center"><div class="th-content">Gender</div></th>
                                                <th class="text-center"><div class="th-content">Email</div></th>
                                                <th class="text-center"><div class="th-content">Phone</div></th>
                                                <th class="text-center"><div class="th-content">Address</div></th>
                                                <th class="text-center"><div class="th-content">Country</div></th>
                                                <th class="text-center"><div class="th-content">Donation Amount</div></th>
                                                <th class="text-center"><div class="th-content">Comment</div></th>
                                                <th class="text-center"><div class="th-content">Date</div></th>
                                                <th class="text-center"><div class="th-content">Destroy</div></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="(donation,index) in donations" :key="index">

                                                <td class="text-center">{{(index+1)}}</td>
                                                <td class="text-center">{{donation.first_name}}</td>
                                                <td class="text-center">{{donation.last_name}}</td>
                                                <td class="text-center">
                                                    <div v-if="donation.gender == 1">
                                                        <span class="shadow-none badge badge-warning">Male</span>
                                                    </div>
                                                    <div v-else>
                                                        <span class="shadow-none badge badge-primary">Female</span>
                                                    </div>
                                                </td>
                                                <td class="text-center">{{donation.email}}</td>                                        
                                                <td class="text-center">{{donation.phone}}</td>
                                                <td class="text-center">{{donation.address}}</td>
                                                <td class="text-center">{{donation.country}}</td>
                                                <td class="text-center">{{donation.donation_amount}}</td>
                                                <td class="text-center">{{donation.comment}}</td>
                                                <td class="text-center">{{donation.created_date}}</td>

                                                <td class="text-center">
                                                    <button class="btn btn-danger mb-2"
                                                        @click="destroyDonation(donation.id)" >
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>Delete
                                                    </button>
                                                </td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</template>

<script>

export default {
    data(){
        return{
            donations : [],
        }
    },

    mounted(){
        this.fetchDonations();
    },

    methods:{
        reset()
        {
            donations = [];
        },

        fetchDonations()
        {
            axios.get("/admin/fetch/donations")
                .then((res) => {

                    if (res.status == 200) {
                        console.log(res);
                        this.donations = res.data;
                    }

                })
                .catch((err) => {console.log("error:" + err);});
        },

        destroyDonation(id){

            Swal.fire({
                    title: '(Delete this Donation)Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                    if (result.isConfirmed) {

                    axios.post("/admin/delete/donations", {
                            id: id,
                        }).then((res) => {

                            if (res.status == 200 && res.data == 1) {

                              Swal.fire(
                                'Deleted!',
                                'Selected donation has been deleted.',
                                'success'
                                )

                                this.reset();
                                this.fetchDonations();

                            }else{
                                Swal.fire("Error", "Donation delete unsuccessfull!", "error");
                            }

                        }).catch((err) => {

                            if (err.response.status == 422){
                                Swal.fire("Error", "Donation delete unsuccessfull!", "error");
                            }
                        });


                    }
                    })

        }
    }
    
}

</script>