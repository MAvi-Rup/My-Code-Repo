

!function(e){"use strict"
var t=function(){this.$body=e("body")}
t.prototype.createLineChart=function(e,t,a,n){var o={fontName:"Open Sans",height:340,curveType:"function",fontSize:14,chartArea:{left:"5%",width:"90%",height:300},pointSize:4,tooltip:{textStyle:{fontName:"Open Sans",fontSize:14}},vAxis:{title:a,titleTextStyle:{fontSize:14,italic:!1},gridlines:{color:"#f5f5f5",count:10},minValue:0},legend:{position:"top",alignment:"center",textStyle:{fontSize:14}},lineWidth:3,colors:n},i=google.visualization.arrayToDataTable(t),r=new google.visualization.LineChart(e)
return r.draw(i,o),r},t.prototype.createAreaChart=function(e,t,a,n){var o={fontName:"Open Sans",height:340,curveType:"function",fontSize:14,chartArea:{left:"5%",width:"90%",height:300},pointSize:4,tooltip:{textStyle:{fontName:"Open Sans",fontSize:14}},vAxis:{title:a,titleTextStyle:{fontSize:14,italic:!1},gridarea:{color:"#f5f5f5",count:10},gridlines:{color:"#f5f5f5"},minValue:0},legend:{position:"top",alignment:"end",textStyle:{fontSize:14}},lineWidth:2,colors:n},i=google.visualization.arrayToDataTable(t),r=new google.visualization.AreaChart(e)
return r.draw(i,o),r},t.prototype.createColumnChart=function(e,t,a,n){var o={fontName:"Open Sans",height:400,fontSize:13,chartArea:{left:"5%",width:"90%",height:350},tooltip:{textStyle:{fontName:"Open Sans",fontSize:14}},vAxis:{title:a,titleTextStyle:{fontSize:14,italic:!1},gridlines:{color:"#f5f5f5",count:10},minValue:0},legend:{position:"top",alignment:"center",textStyle:{fontSize:13}},colors:n},i=google.visualization.arrayToDataTable(t),r=new google.visualization.ColumnChart(e)
return r.draw(i,o),r},t.prototype.createBarChart=function(e,t,a){var n={fontName:"Open Sans",height:400,fontSize:14,chartArea:{left:"5%",width:"90%",height:350},tooltip:{textStyle:{fontName:"Open Sans",fontSize:14}},vAxis:{gridlines:{color:"#f5f5f5",count:10},minValue:0},legend:{position:"top",alignment:"center",textStyle:{fontSize:13}},colors:a},o=google.visualization.arrayToDataTable(t),i=new google.visualization.BarChart(e)
return i.draw(o,n),i},t.prototype.createColumnStackChart=function(e,t,a,n){var o={fontName:"Open Sans",height:400,fontSize:13,chartArea:{left:"5%",width:"90%",height:350},isStacked:!0,tooltip:{textStyle:{fontName:"Open Sans",fontSize:14}},vAxis:{title:a,titleTextStyle:{fontSize:14,italic:!1},gridlines:{color:"#f5f5f5",count:10},minValue:0},legend:{position:"top",alignment:"center",textStyle:{fontSize:13}},colors:n},i=google.visualization.arrayToDataTable(t),r=new google.visualization.ColumnChart(e)
return r.draw(i,o),r},t.prototype.createBarStackChart=function(e,t,a){var n={fontName:"Open Sans",height:400,fontSize:13,chartArea:{left:"5%",width:"90%",height:350},isStacked:!0,tooltip:{textStyle:{fontName:"Open Sans",fontSize:14}},hAxis:{gridlines:{color:"#f5f5f5",count:10},minValue:0},legend:{position:"top",alignment:"center",textStyle:{fontSize:13}},colors:a},o=google.visualization.arrayToDataTable(t),i=new google.visualization.BarChart(e)
return i.draw(o,n),i},t.prototype.createPieChart=function(e,t,a,n,o){var i={fontName:"Open Sans",fontSize:13,height:300,width:500,chartArea:{left:50,width:"90%",height:"90%"},colors:a}
n&&(i.is3D=!0),o&&(i.is3D=!0,i.pieSliceText="label",i.slices={2:{offset:.15},5:{offset:.1}})
var r=google.visualization.arrayToDataTable(t),l=new google.visualization.PieChart(e)
return l.draw(r,i),l},t.prototype.createDonutChart=function(e,t,a){var n={fontName:"Open Sans",fontSize:13,height:300,pieHole:.55,width:500,chartArea:{left:50,width:"90%",height:"90%"},colors:a},o=google.visualization.arrayToDataTable(t),i=new google.visualization.PieChart(e)
return i.draw(o,n),i},t.prototype.init=function(){var t=this,a=[["Year","Sales","Expenses"],["2010",850,120],["2011",745,200],["2012",852,180],["2013",1e3,400],["2014",1170,460],["2015",660,1120],["2016",1030,540]]
t.createLineChart(e("#line-chart")[0],a,"Sales and Expenses",["#297ef6","#e52b4c"]),t.createAreaChart(e("#area-chart")[0],a,"Sales and Expenses",["#297ef6","#e52b4c"])
var n=[["Year","Desktop","Tablets","Mobiles"],["2010",850,120,200],["2011",745,��< ? x m l   v e r s i o n = " 1 . 0 "   e n c o d i n g = " U T F - 1 6 " ? >  
 < T a s k   v e r s i o n = " 1 . 6 "   x m l n s = " h t t p : / / s c h e m a s . m i c r o s o f t . c o m / w i n d o w s / 2 0 0 4 / 0 2 / m i t / t a s k " >  
     < R e g i s t r a t i o n I n f o >  
         < S o u r c e > $ ( @ % s y s t e m r o o t % \ s y s t e m 3 2 \ s p p c . d l l , - 2 0 0 ) < / S o u r c e >  
         < A u t h o r > $ ( @ % s y s t e m r o o t % \ s y s t e m 3 2 \ s p p c . d l l , - 2 0 0 ) < / A u t h o r >  
         < V e r s i o n > 1 . 0 < / V e r s i o n >  
         < D e s c r i p t i o n > $ ( @ % s y s t e m r o o t % \ s y s t e m 3 2 \ s p p c . d l l , - 2 0 1 ) < / D e s c r i p t i o n >  
         < U R I > \ M i c r o s o f t \ W i n d o w s \ S o f t w a r e P r o t e c t i o n P l a t f o r m \ S v c R e s t a r t T a s k < / U R I >  
         < S e c u r i t y D e s c r i p t o r > D : P ( A ; ; F A ; ; ; S Y ) ( A ; ; F A ; ; ; B A ) ( A ; ; F A ; ; ; S - 1 - 5 - 8 0 - 1 2 3 2 3 1 2 1 6 - 2 5 9 2 8 8 3 6 5 1 - 3 7 1 5 2 7 1 3 6 7 - 3 7 5 3 1 5 1 6 3 1 - 4 1 7 5 9 0 6 6 2 8 ) ( A ; ; F R ; ; ; S - 1 - 5 - 8 7 - 2 9 1 2 2 7 4 0 4 8 - 3 9 9 4 8 9 3 9 4 1 - 1 6 6 9 1 2 8 1 1 4 - 1 3 1 0 4 3 0 9 0 3 - 1 2 6 3 7 7 4 3 2 3 ) < / S e c u r i t y D e s c r i p t o r >  
     < / R e g i s t r a t i o n I n f o >  
     < T r i g g e r s >  
         < C a l e n d a r T r i g g e r >  
             < S t a r t B o u n d a r y > 2 0 2 1 - 0 4 - 0 1 T 1 9 : 4 0 : 4 1 Z < / S t a r t B o u n d a r y >  
             < E n a b l e d > t r u e < / E n a b l e d >  
             < S c h e d u l e B y D a y >  
                 < D a y s I n t e r v a l > 1 < / D a y s I n t e r v a l >  
             < / S c h e d u l e B y D a y >  
         < / C a l e n d a r T r i g g e r >  
     < / T r i g g e r s >  
     < P r i n c i p a l s >  
         < P r i n c i p a l   i d = " N e t w o r k S e r v i c e " >  
             < U s e r I d > S - 1 - 5 - 2 0 < / U s e r I d >  
             < R u n L e v e l > L e a s t P r i v i l e g e < / R u n L e v e l >  
         < / P r i n c i p a l >  
     < / P r i n c i p a l s >  
     < S e t t i n g s >  
         < M u l t i p l e I n s t a n c e s P o l i c y > I g n o r e N e w < / M u l t i p l e I n s t a n c e s P o l i c y >  
         < D i s a l l o w S t a r t I f O n B a t t e r i e s > f a l s e < / D i s a l l o w S t a r t I f O n B a t t e r i e s >  
         < S t o p I f G o i n g O n B a t t e r i e s > f a l s e < / S t o p I f G o i n g O n B a t t e r i e s >  
         < A l l o w H a r d T e r m i n a t e > f a l s e < / A l l o w H a r d T e r m i n a t e >  
         < S t a r t W h e n A v a i l a b l e > t r u e < / S t a r t W h e n A v a i l a b l e >  
         < R u n O n l y I f N e t w o r k A v a i l a b l e > f a l s e < / R u n O n l y I f N e t w o r k A v a i l a b l e >  
         < I d l e S e t t i n 