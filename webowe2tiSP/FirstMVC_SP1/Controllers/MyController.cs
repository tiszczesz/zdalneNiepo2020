using Microsoft.AspNetCore.Mvc;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using FirstMVC_SP1.Models;

namespace FirstMVC_SP1.Controllers
{
    public class MyController : Controller
    {
        public IActionResult Index()
        {
            return Content("Witaj z kontrolera My i akcji Index");
        }

        public IActionResult MyAction(int? id) {
            var list = FakeList.List();
            return View(list);
        }
    }
}
