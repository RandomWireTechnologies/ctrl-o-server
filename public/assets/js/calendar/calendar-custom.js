!function(e, t, a){"use strict"; var o = '[data-toggle="aside"]', n = e("body"); e(a).on("click", o, function(e){e.preventDefault(), n.toggleClass("aside-toggled")})}(jQuery, window, document), function(e){function t(t, a){var o = e("#remove-after-drop"); t.fullCalendar({header:{left:"prev,next today", center:"title", right:"month,agendaWeek,agendaDay"}, buttonIcons:{prev:" icon arrow_triangle-left", next:" icon arrow_triangle-right"}, buttonText:{today:"today", month:"month", week:"week", day:"day"}, editable:!0, droppable:!0, drop:function(a, n){var r = e(this), i = r.data("calendarEventObject"); if (i){var s = e.extend({}, i); s.start = a, s.allDay = n, s.backgroundColor = r.css("background-color"), s.borderColor = r.css("border-color"), t.fullCalendar("renderEvent", s, !0), o.is(":checked") && r.remove()}}, eventDragStart:function(e){draggingEvent = e}, events:a})}function a(t){var a = e(".page-events"); new n(a.children("div")); var o = "#36a9e1", r = e(".page-event-add-btn"), i = e(".page-event-name"), s = e(".page-event-color-selector .point"); e(".page-events-trash").draggable({accept:".fc-event", activeClass:"active", hoverClass:"hovered", tolerance:"touch", drop:function(e, a){if (draggingEvent){var o = draggingEvent.id || draggingEvent._id; t.fullCalendar("removeEvents", o), a.draggable.remove(), draggingEvent = null}}}), s.click(function(t){t.preventDefault(); var a = e(this); o = a.css("background-color"), s.removeClass("selected"), a.addClass("selected")}), r.click(function(t){t.preventDefault(); var r = i.val(); if ("" !== e.trim(r)){var s = e("<div/>").css({"background-color":o, "border-color":o, color:"#fff"}).html(r); a.prepend(s), new n(s), i.val("")}})}function o(){var e = new Date, t = e.getDate(), a = e.getMonth(), o = e.getFullYear(); 
        return[
        {title:"All Day Event", start:new Date(o, a, 1), backgroundColor:"#d9534f", borderColor:"#d9534f"},
        {title:"Repeating Event", start:new Date(o, a, t - 4, 9, 00), backgroundColor:"#36a9e1", borderColor:"#36a9e1"},
        {title:"Long Event", start:new Date(o, a, t - 5), end:new Date(o, a, t - 2), backgroundColor:"#ffa726", borderColor:"#ffa726"},
        {title:"Meeting", start:new Date(o, a, t, 10, 30), allDay:!1, backgroundColor:"#d9534f", borderColor:"#d9534f"},
        {title:"Lunch", start:new Date(o, a, t, 12, 0), end:new Date(o, a, t, 14, 0), allDay:!1, backgroundColor:"#36a9e1", borderColor:"#36a9e1"},
        {title:"Birthday Party", start:new Date(o, a, t + 1, 19, 0), end:new Date(o, a, t + 1, 22, 30), allDay:!1, backgroundColor:"#66bb6a", borderColor:"#66bb6a"},
        {title:"Conference", start:new Date(o, a, 16), end:new Date(o, a, 18), backgroundColor:"#36a9e1", borderColor:"#36a9e1"},
        {title:"Metting", start:new Date(o, a, 16, 10, 30), end:new Date(o, a, 17), backgroundColor:"#d9534f", borderColor:"#d9534f"},
        {title:"Happy Hour", start:new Date(o, a, 16, 17, 30), end:new Date(o, a, 17), backgroundColor:"#66bb6a", borderColor:"#66bb6a"},
        {title:"Dinner", start:new Date(o, a, 16, 20), end:new Date(o, a, 17), backgroundColor:"#ffa726", borderColor:"#ffa726"},
        {title:"Birthday Party", start:new Date(o, a, 19), end:new Date(o, a, 20), backgroundColor:"#66bb6a", borderColor:"#66bb6a"},
        {title:"Birthday Party", start:new Date(o, a, 20), end:new Date(o, a, 21), backgroundColor:"#66bb6a", borderColor:"#66bb6a"},
        {title:"Open Google", start:new Date(o, a, 28), end:new Date(o, a, 29), url:"http://google.com/", backgroundColor:"#5e95c5", borderColor:"#5e95c5"}]}
if (e.fn.fullCalendar){
var n = function(t){
t && t.each(function(){
var t = e(this), a = {title:e.trim(t.text())};
        t.data("calendarEventObject", a),
        t.draggable({zIndex:1070, revert:!0, revertDuration:0})})};
        e(function(){
        var n = e("#calendar"), r = o(); a(n), t(n, r)})}}
(jQuery, window, document);