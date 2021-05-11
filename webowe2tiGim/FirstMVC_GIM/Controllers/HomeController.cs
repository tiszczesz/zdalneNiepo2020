using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using FirstMVC_GIM.Models;
using Microsoft.AspNetCore.Mvc;

namespace FirstMVC_GIM.Controllers
{
    public class HomeController : Controller
    {
        public IActionResult Index(int? id) {
            ViewBag.hello = "Hello from ViewBag";
            ViewBag.controller = ControllerContext.ActionDescriptor.ControllerName;
            ViewBag.action = ControllerContext.ActionDescriptor.ActionName;
            return View();
        }

        public IActionResult GetBooks() {
            List<Book> books = BookRepo.GetBooks();
            return View(books);
        }
    }
}
