using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using WebMVC_Form_1.Models;

namespace WebMVC_Form_1.Controllers
{
    public class MyFormController : Controller
    {
        public IActionResult Index()
        {
            return View("NoModel");
        }

        [HttpGet]
        public IActionResult NoModel() {
            ViewBag.controllerName = ControllerContext.ActionDescriptor.ControllerName;
            ViewBag.actionName = ControllerContext.ActionDescriptor.ActionName;
            return View();
        }
        [HttpPost]
        public IActionResult NoModel(string? name,string? division) {
            ViewBag.post = true;
            ViewBag.name = Request.Form["name"].ToString();
            ViewBag.division = Request.Form["division"].ToString();
            ViewBag.gender = Request.Form["gender"].ToString();
            ViewBag.zaint = Request.Form["zaint"].ToString();
            return View();
        }

        [HttpGet]
        public IActionResult WithModel() {
            ViewBag.controllerName = ControllerContext.ActionDescriptor.ControllerName;
            ViewBag.actionName = ControllerContext.ActionDescriptor.ActionName;
            string[] genders = new string[] {"Kobieta", "Mężczyzna", "Inna"};
            string[] divisions = new string[] {"1A", "1B", "1C","1Inf","1TOT"};
            
            ViewBag.genders = genders;
            ViewBag.divisions = divisions;
            Candidate c = new Candidate();
            c.InterestsList = new List<Item>() {
                new Item() {Name = "Sport"},
                new Item() {Name = "Muzyka"},
                new Item() {Name = "Książki"},
                new Item() {Name = "Film"},
                new Item() {Name = "Taniec"},
                new Item() {Name = "Inne"},
            }; ;
            return View(c);
        }

        [HttpPost]
        public IActionResult WithModel(Candidate candidate) {
            
            string[] genders = new string[] { "Kobieta", "Mężczyzna", "Inna" };
            string[] divisions = new string[] { "1A", "1B", "1C", "1Inf", "1TOT" };
            
            ViewBag.genders = genders;
            ViewBag.divisions = divisions;
            if (ModelState.IsValid) {
                ViewBag.post = true;
                
                
            }
            return View(candidate);
        }
    }
}
