//Dropdown function in Vegetable.html                                   
function vegDropdownFn() {
    document.getElementById("myDropdown").classList.toggle("show");
}
                                    
function filterFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    div = document.getElementById("myDropdown");
    a = div.getElementsByTagName("a");

    for (i = 0; i < a.length; i++) {
        txtValue = a[i].textContent || a[i].innerText;

        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            a[i].style.display = "";
        } else {
            a[i].style.display = "none";
        }
    }
}


//Chart.js for vegetable.html
function VegChartGeneration(vegetableName){

    vegBgimage = document.getElementById('vegBg');
    vegBgimage.style.visibility = 'hidden';
    vegBgimage.style.display = 'none';

let myVegChart = document.getElementById('myVegChart').getContext('2d');
                                
// Global Options
Chart.defaults.global.defaultFontFamily = 'Calibri';
Chart.defaults.global.defaultFontSize = 12;
Chart.defaults.global.defaultFontColor = '#777';
                            
let massPopChart = new Chart(myVegChart, {
type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
    data:{
        labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
         'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
         'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
         'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
        datasets:[{
            label:'Cultivation Extent',
            data:[
                    2.4,
                    11.5,
                    302.3,
                    72.4,
                    51.5,
                    102.3,
                    26.4,
                    11.5,
                    272.3,
                    142.4,
                    193.5,
                    309.3,
                    70.4,
                    212.5,
                    102.3,
                    96.4,
                    351.5,
                    82.3,
                    52.3,
                    262.4,
                    300.5,
                    19.3,
                    64.4,
                    189.5,
                    272.3,                        
                                          ],
                    //backgroundColor:'green',
                    backgroundColor:[
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)',
                    'rgba(153, 102, 255, 0.6)',
                    'rgba(255, 159, 64, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(255, 99, 132, 0.6)',
                    'rgba(54, 162, 235, 0.6)',
                    'rgba(255, 206, 86, 0.6)',
                    'rgba(75, 192, 192, 0.6)'
                    ],
                    borderWidth:1,
                    borderColor:'#777',
                    hoverBorderWidth:3,
                    hoverBorderColor:'#000'
                    }]
                    },
                    options:{
                        title:{
                            display:true,
                            text: 'Cultivation Extent in Ha. of ' + vegetableName,
                            fontSize:20,
                            fontColor: 'black',
                            fontWeight: 'bold'
                         },
                        legend:{
                            display:false,
                            position:'bottom',
                            labels:{
                            fontColor:'#000'
                        }
                    },              
                    layout:{
                        padding:{
                          left:50,
                          right:0,
                          bottom:0,
                          top:0
                        }
                      },
                      tooltips:{
                        enabled:true
                      }
                    }
                  });  
                }
                
                
//Chart.js for ofc.html
function OFCChartGeneration(OFCName){

    vegBgimage = document.getElementById('ofcBg');
    vegBgimage.style.visibility = 'hidden';
    vegBgimage.style.display = 'none';

    let myOFCChart = document.getElementById('myOFCChart').getContext('2d');
                                    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Calibri';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';
                                
    let massPopChart = new Chart(myOFCChart, {
    type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
             'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
             'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
             'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
            datasets:[{
                label:'Cultivation Extent',
                data:[
                        2.4,
                        11.5,
                        302.3,
                        72.4,
                        51.5,
                        102.3,
                        26.4,
                        11.5,
                        272.3,
                        142.4,
                        193.5,
                        309.3,
                        70.4,
                        212.5,
                        102.3,
                        96.4,
                        351.5,
                        82.3,
                        52.3,
                        262.4,
                        300.5,
                        19.3,
                        64.4,
                        189.5,
                        272.3,                        
                                              ],
                        //backgroundColor:'green',
                        backgroundColor:[
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                        ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                        }]
                        },
                        options:{
                            title:{
                                display:true,
                                text:'Cultivation Extent in Ha. of ' + OFCName,
                                fontSize:20,
                                fontColor: 'black',
                                fontWeight: 'bold'
                             },
                            legend:{
                                display:true,
                                position:'bottom',
                                labels:{
                                fontColor:'#000'
                            }
                        },              
                        layout:{
                            padding:{
                              left:50,
                              right:0,
                              bottom:0,
                              top:0
                            }
                          },
                          tooltips:{
                            enabled:true
                          }
                        }
                      });  
                    }


//Chart.js for Country Summary
function CountryChartGeneration(){

    let paddySummaryChart = document.getElementById('paddySummaryChart').getContext('2d');
                                    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Calibri';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';
                                
    let massPopChart = new Chart(paddySummaryChart, {
    type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
             'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
             'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
             'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
            datasets:[{
                label:'Cultivation Extent',
                data:[
                        2.4,
                        11.5,
                        302.3,
                        72.4,
                        51.5,
                        102.3,
                        26.4,
                        11.5,
                        272.3,
                        142.4,
                        193.5,
                        309.3,
                        70.4,
                        212.5,
                        102.3,
                        96.4,
                        351.5,
                        82.3,
                        52.3,
                        262.4,
                        300.5,
                        19.3,
                        64.4,
                        189.5,
                        272.3,                        
                                              ],
                        //backgroundColor:'green',
                        backgroundColor:[
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                        ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000',
                        fill: false
                        }]
                        },
                        options:{
                            title:{
                                display:true,
                                text:'Country Summary Graph',
                                fontSize:20,
                                fontColor: 'black',
                                fontWeight: 'bold'
                             },
                            legend:{
                                display:true,
                                position:'bottom',
                                labels:{
                                fontColor:'#000'
                            }
                        },              
                        layout:{
                            padding:{
                              left:50,
                              right:0,
                              bottom:0,
                              top:0
                            }
                          },
                          tooltips:{
                            enabled:true
                          }
                        }
                      });  
                    }

//Chart.js for District Summary
function districtSummaryGraph(){

    // districtLinkActive = document.getElementById('districtLink');
    // districtLinkActive.style.backgroundColor = 'darkgreen';
    // districtLinkActive.style.color = 'white';

    let paddySummaryChart = document.getElementById('paddySummaryChart').getContext('2d');
                                    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Calibri';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';
                                
    let massPopChart = new Chart(paddySummaryChart, {
    type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
             'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
             'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
             'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
            datasets:[{
                label:'Cultivation Extent',
                data:[
                        2.4,
                        11.5,
                        302.3,
                        72.4,
                        51.5,
                        102.3,
                        26.4,
                        11.5,
                        272.3,
                        142.4,
                        193.5,
                        309.3,
                        70.4,
                        212.5,
                        102.3,
                        96.4,
                        351.5,
                        82.3,
                        52.3,
                        262.4,
                        300.5,
                        19.3,
                        64.4,
                        189.5,
                        272.3,                        
                                              ],
                        //backgroundColor:'green',
                        backgroundColor:[
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                        ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                        }]
                        },
                        options:{
                            title:{
                                display:true,
                                text:'District Summary Graph',
                                fontSize:20,
                                fontColor: 'black',
                                fontWeight: 'bold'
                             },
                            legend:{
                                display:true,
                                position:'bottom',
                                labels:{
                                fontColor:'#000'
                            }
                        },              
                        layout:{
                            padding:{
                              left:50,
                              right:0,
                              bottom:0,
                              top:0
                            }
                          },
                          tooltips:{
                            enabled:true
                          }
                        }
                      });  
                    }


//Chart.js for Irrigation Mode Summary
function IrrigationModeDistrict(){

    let paddySummaryChart = document.getElementById('paddySummaryChart').getContext('2d');
                                    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Calibri';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';
                                
    let massPopChart = new Chart(paddySummaryChart, {
    type:'pie', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
             'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
             'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
             'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
            datasets:[{
                label:'Cultivation Extent',
                data:[
                        2.4,
                        11.5,
                        302.3,
                        72.4,
                        51.5,
                        102.3,
                        26.4,
                        11.5,
                        272.3,
                        142.4,
                        193.5,
                        309.3,
                        70.4,
                        212.5,
                        102.3,
                        96.4,
                        351.5,
                        82.3,
                        52.3,
                        262.4,
                        300.5,
                        19.3,
                        64.4,
                        189.5,
                        272.3,                        
                                              ],
                        //backgroundColor:'green',
                        backgroundColor:[
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                        ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                        }]
                        },
                        options:{
                            title:{
                                display:true,
                                text:'Irrigation Mode District Graph',
                                fontSize:20,
                                fontColor: 'black',
                                fontWeight: 'bold'
                             },
                            legend:{
                                display:true,
                                position:'bottom',
                                labels:{
                                fontColor:'#000'
                            }
                        },              
                        layout:{
                            padding:{
                              left:50,
                              right:0,
                              bottom:0,
                              top:0
                            }
                          },
                          tooltips:{
                            enabled:true
                          }
                        }
                      });  
                    }

//Chart.js for Grain Type
function GrainType(){

    let paddySummaryChart = document.getElementById('paddySummaryChart').getContext('2d');
                                    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Calibri';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';
                                
    let massPopChart = new Chart(paddySummaryChart, {
    type:'radar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
             'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
             'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
             'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
            datasets:[{
                label:'Cultivation Extent',
                data:[
                        2.4,
                        11.5,
                        302.3,
                        72.4,
                        51.5,
                        102.3,
                        26.4,
                        11.5,
                        272.3,
                        142.4,
                        193.5,
                        309.3,
                        70.4,
                        212.5,
                        102.3,
                        96.4,
                        351.5,
                        82.3,
                        52.3,
                        262.4,
                        300.5,
                        19.3,
                        64.4,
                        189.5,
                        272.3,                        
                                              ],
                        //backgroundColor:'green',
                        backgroundColor:[
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                        ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                        }]
                        },
                        options:{
                            title:{
                                display:true,
                                text:'Paddy Type Summary',
                                fontSize:20,
                                fontColor: 'black',
                                fontWeight: 'bold'
                             },
                            legend:{
                                display:true,
                                position:'bottom',
                                labels:{
                                fontColor:'#000'
                            }
                        },              
                        layout:{
                            padding:{
                              left:50,
                              right:0,
                              bottom:0,
                              top:0
                            }
                          },
                          tooltips:{
                            enabled:true
                          }
                        }
                      });  
                    }


//Chart.js for Age Type
function AgeType(){

    let paddySummaryChart = document.getElementById('paddySummaryChart').getContext('2d');
                                    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Calibri';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';
                                
    let massPopChart = new Chart(paddySummaryChart, {
    type:'horizontalBar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
             'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
             'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
             'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
            datasets:[{
                label:'Cultivation Extent',
                data:[
                        2.4,
                        11.5,
                        302.3,
                        72.4,
                        51.5,
                        102.3,
                        26.4,
                        11.5,
                        272.3,
                        142.4,
                        193.5,
                        309.3,
                        70.4,
                        212.5,
                        102.3,
                        96.4,
                        351.5,
                        82.3,
                        52.3,
                        262.4,
                        300.5,
                        19.3,
                        64.4,
                        189.5,
                        272.3,                        
                                              ],
                        //backgroundColor:'green',
                        backgroundColor:[
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                        ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                        }]
                        },
                        options:{
                            title:{
                                display:true,
                                text:'Paddy Age Type Summary',
                                fontSize:20,
                                fontColor: 'black',
                                fontWeight: 'bold'
                             },
                            legend:{
                                display:true,
                                position:'bottom',
                                labels:{
                                fontColor:'#000'
                            }
                        },              
                        layout:{
                            padding:{
                              left:50,
                              right:0,
                              bottom:0,
                              top:0
                            }
                          },
                          tooltips:{
                            enabled:true
                          }
                        }
                      });  
                    }

                    
//Chart.js for Variety in Age Type
function VarietyInAgeType(){

    

    let paddySummaryChart = document.getElementById('paddySummaryChart').getContext('2d');
                                    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Calibri';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';
                                
    let massPopChart = new Chart(paddySummaryChart, {
    type:'radar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
             'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
             'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
             'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
            datasets:[{
                label:'Cultivation Extent',
                data:[
                        2.4,
                        11.5,
                        302.3,
                        72.4,
                        51.5,
                        102.3,
                        26.4,
                        11.5,
                        272.3,
                        142.4,
                        193.5,
                        309.3,
                        70.4,
                        212.5,
                        102.3,
                        96.4,
                        351.5,
                        82.3,
                        52.3,
                        262.4,
                        300.5,
                        19.3,
                        64.4,
                        189.5,
                        272.3,                        
                                              ],
                        //backgroundColor:'green',
                        backgroundColor:[
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                        ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                        }]
                        },
                        options:{
                            title:{
                                display:true,
                                text:'Paddy Variety in Age Type Summary',
                                fontSize:20,
                                fontColor: 'black',
                                fontWeight: 'bold'
                             },
                            legend:{
                                display:true,
                                position:'bottom',
                                labels:{
                                fontColor:'#000'
                            }
                        },              
                        layout:{
                            padding:{
                              left:50,
                              right:0,
                              bottom:0,
                              top:0
                            }
                          },
                          tooltips:{
                            enabled:true
                          }
                        }
                      });  
                    }


//Chart.js for Pericarp Color
function PericarpColor(){

    let paddySummaryChart = document.getElementById('paddySummaryChart').getContext('2d');
                                    
    // Global Options
    Chart.defaults.global.defaultFontFamily = 'Calibri';
    Chart.defaults.global.defaultFontSize = 12;
    Chart.defaults.global.defaultFontColor = '#777';
                                
    let massPopChart = new Chart(paddySummaryChart, {
    type:'bar', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
        data:{
            labels:['Anuradhapura', 'Ampara', 'Badulla', 'Batticaloa', 'Colombo', 'Galle',
             'Gampaha', 'Hambantota', 'Jaffna', 'Batticaloa', 'Kalutara', 'Kandy',
             'Kegalle', 'Kilinochchi', 'Kurunegala', 'Mannar', 'Matale', 'Matara',
             'Moneragala', 'Mullaitivu ', 'Nuwara Eliya', 'Polonnaruwa', 'Puttalam', 'Ratnapura','Trincomalee', 'Vavuniya'],
            datasets:[{
                label:'Cultivation Extent',
                data:[
                        2.4,
                        11.5,
                        302.3,
                        72.4,
                        51.5,
                        102.3,
                        26.4,
                        11.5,
                        272.3,
                        142.4,
                        193.5,
                        309.3,
                        70.4,
                        212.5,
                        102.3,
                        96.4,
                        351.5,
                        82.3,
                        52.3,
                        262.4,
                        300.5,
                        19.3,
                        64.4,
                        189.5,
                        272.3,                        
                                              ],
                        //backgroundColor:'green',
                        backgroundColor:[
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(153, 102, 255, 0.6)',
                        'rgba(255, 159, 64, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(54, 162, 235, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(75, 192, 192, 0.6)'
                        ],
                        borderWidth:1,
                        borderColor:'#777',
                        hoverBorderWidth:3,
                        hoverBorderColor:'#000'
                        }]
                        },
                        options:{
                            title:{
                                display:true,
                                text:'Paddy Pericarp Color Summary',
                                fontSize:20,
                                fontColor: 'black',
                                fontWeight: 'bold'
                             },
                            legend:{
                                display:true,
                                position:'bottom',
                                labels:{
                                fontColor:'#000'
                            }
                        },              
                        layout:{
                            padding:{
                              left:50,
                              right:0,
                              bottom:0,
                              top:0
                            }
                          },
                          tooltips:{
                            enabled:true
                          }
                        }
                      });  
                    }

// Function for making active links in nav bar

// function ActiveLinks(num){

//     for(int y = 1; y <= 8; y++ ){

//     }
    

//     districtLinkActive = document.getElementById('districtLink');
//     districtLinkActive.style.backgroundColor = 'darkgreen';
//     districtLinkActive.style.color = 'white';

//     Link.style.backgroundColor
// }

//Chart generation for harvest.html

function HarvestChartGeneration(cropName){

    harvestBgImage = document.getElementById('harvestBgImage');
    harvestBgImage.style.visibility = 'hidden';
    harvestBgImage.style.display = 'none';

let myHarvestChart1 = document.getElementById('myHarvestChart1').getContext('2d');
                                
// Global Options
Chart.defaults.global.defaultFontFamily = 'Calibri';
Chart.defaults.global.defaultFontSize = 12;
Chart.defaults.global.defaultFontColor = '#777';
                            
let massPopChart = new Chart(myHarvestChart1, {
type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
    data:{
        labels:['April','May', 'June', 'July'],
        datasets:[{   // Dataset 1
            label:'Ir(Sum)',
            data:[22,44,16,32],
            backgroundColor:'red',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        },
        // Dataset 2
        {
            label:'Mjir(Sum)',
            data:[55,01,39,12],
            backgroundColor:'blue',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        },
        // Dataset 3
        {
            label:'Mnir(Sum)',
            data:[45,40,25,29],
            backgroundColor:'yellow',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        },
        // Dataset 4
        {
            label:'Rf(Sum)',
            data:[12,19,38,41],
            backgroundColor:'darkgreen',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        },
        // Dataset 5
        {
            label:'TotExtha(Sum)',
            data:[29,26,16,38],
            backgroundColor:'grey',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        }]
    },
    options:{
        title:{
            display:true,
            text: 'Cultivation Extent in Ha. of ' + cropName,
            fontSize:20,
            fontColor: 'black',
            fontWeight: 'bold'
        },
        legend:{
            display:true,
            position:'bottom',
            labels:{
                fontColor:'#000'
            }
        },              
        layout:{
            padding:{
                left:50,
                right:0,
                bottom:0,
                top:0
            }
        },
        tooltips:{enabled:true}
    }
    });  
}


//Chart 2 generation for harvest.html

function HarvestChartGeneration2(cropName){

    harvestBgImage = document.getElementById('harvestBgImage');
    harvestBgImage.style.visibility = 'hidden';
    harvestBgImage.style.display = 'none';



let myHarvestChart2 = document.getElementById('myHarvestChart2').getContext('2d');
                     

// Global Options
Chart.defaults.global.defaultFontFamily = 'Calibri';
Chart.defaults.global.defaultFontSize = 12;
Chart.defaults.global.defaultFontColor = '#777';
                            
let massPopChart = new Chart(myHarvestChart2, {
type:'line', // bar, horizontalBar, pie, line, doughnut, radar, polarArea
    data:{
        labels:['April','May', 'June', 'July'],
        datasets:[{   // Dataset 1
            label:'Ir(Sum)',
            data:[10,44,16,32],
            backgroundColor: '#F3A712',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        },
        // Dataset 2
        {
            label:'Mjir(Sum)',
            data:[8,01,39,12],
            backgroundColor:'#29335c',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        },
        // Dataset 3
        {
            label:'Mnir(Sum)',
            data:[2,40,25,29],
            backgroundColor:'#380036',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        },
        // Dataset 4
        {
            label:'Rf(Sum)',
            data:[13,19,38,41],
            backgroundColor:'#773344',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        },
        // Dataset 5
        {
            label:'TotExtha(Sum)',
            data:[6,26,16,38],
            backgroundColor:'#68f3c5',
            borderWidth:1,
            borderColor:'#777',
            hoverBorderWidth:3,
            hoverBorderColor:'#000',
            fill: false,
            pointRadius: 5
            
        }]
    },
    options:{
        title:{
            display:true,
            text: 'Expected production distribution (MT) of ' + cropName,
            fontSize:20,
            fontColor: 'black',
            fontWeight: 'bold'
        },
        legend:{
            display:true,
            position:'bottom',
            labels:{
                fontColor:'#000'
            }
        },              
        layout:{
            padding:{
                left:50,
                right:0,
                bottom:0,
                top:0
            }
        },
        tooltips:{enabled:true}
    }
    });  
}