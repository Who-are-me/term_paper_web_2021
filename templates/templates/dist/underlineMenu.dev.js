"use strict";

var path = window.location.pathname;
var page = path.split("/").pop();

switch (page) {
  case 'about_us':
    $('#navMainPage').css("border-bottom: rgba(233, 63, 52, 0.75) 2px solid;");
    break;

  case 'to_entrant':
    $('#navAboutUsPage').css("border-bottom: rgba(233, 63, 52, 0.75) 2px solid;");
    break;

  case 'student':
    $('#navMaterialBasePage').css("border-bottom: rgba(233, 63, 52, 0.75) 2px solid;");
    break;

  case '':
    $('#navAbiturientuPage').css("border-bottom: rgba(233, 63, 52, 0.75) 2px solid;");
    break;

  case '':
    $('#navForStudentPage').css("border-bottom: rgba(233, 63, 52, 0.75) 2px solid;");
    break;

  case '':
    $('#navNewsPage').css("border-bottom: rgba(233, 63, 52, 0.75) 2px solid;");
    break;

  case '':
    $('#navFeedbackPage').css("border-bottom: rgba(233, 63, 52, 0.75) 2px solid;");
    break;

  default:
    ;
}