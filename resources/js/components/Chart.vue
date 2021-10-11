<script>

export default {
  props:['bikash'],
  data() {
    return {
     
          series: [25, 15, 44, 55, 41, 17],
          chartOptions: {
            chart: {
              width: '100%',
              type: 'pie',
            },
            labels: ["Helsinki", "Espoo", "Tallinna", "Tampere", "Nokia", "Hollola"],
            theme: {
               monochrome: {
                enabled: true,
                color: '#3b5407',
                shadeTo: 'light',
                shadeIntensity: 0.65
      },
            },
            plotOptions: {
              pie: {
                dataLabels: {
                  offset: 5
                }
              }
            },
            title: {
              text: "Portfolion arvo alueittan(%)"
            },
            dataLabels: {
                enabled:false,
            //   formatter(val, opts) {
            //     const name = opts.w.globals.labels[opts.seriesIndex]
            //     return [name, val.toFixed(1) + '%']
            //   }
            },
            legend: {
              show: true,
              position: "right"
             
            }
            
          },
    }
  },
  computed: {
   
  },
  methods: {
    
    
  },
  mounted: function() {
   
  },
    watch: {
       
    },
}
</script>
<template>
    <div class="chart conatiner">
        <div class="row">
            <div class="col-lg-6"> <apexchart type="pie" width="450" :options="chartOptions" :series="series"></apexchart></div>
            <div class="col-lg-6">{{bikash}}</div>
        </div>

      
     
    </div>
</template>


<style lang="scss" scoped>
.fade-enter-active, .fade-leave-active {
    transition: opacity .5s;
  }
  .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
    opacity: 0;
  }


</style>
