using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using FCOC.Classes;
using brontona.Data;

namespace brontona.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class ordersController : ControllerBase
    {
        private readonly Context _context;

        public ordersController(Context context)
        {
            _context = context;
        }

        // GET: api/orders
        [HttpGet]
        public IEnumerable<orders> Getorders()
        {
            return _context.orders;
        }

        // GET: api/orders/5
        [HttpGet("{id}")]
        public async Task<IActionResult> Getorders([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var orders = await _context.orders.FindAsync(id);

            if (orders == null)
            {
                return NotFound();
            }

            return Ok(orders);
        }

        // PUT: api/orders/5
        [HttpPut("{id}")]
        public async Task<IActionResult> Putorders([FromRoute] string id, [FromBody] orders orders)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            if (id != orders.orderid)
            {
                return BadRequest();
            }

            _context.Entry(orders).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!ordersExists(id))
                {
                    return NotFound();
                }
                else
                {
                    throw;
                }
            }

            return NoContent();
        }

        // POST: api/orders
        [HttpPost]
        public async Task<IActionResult> Postorders([FromBody] orders orders)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            _context.orders.Add(orders);
            await _context.SaveChangesAsync();

            return CreatedAtAction("Getorders", new { id = orders.orderid }, orders);
        }

        // DELETE: api/orders/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> Deleteorders([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var orders = await _context.orders.FindAsync(id);
            if (orders == null)
            {
                return NotFound();
            }

            _context.orders.Remove(orders);
            await _context.SaveChangesAsync();

            return Ok(orders);
        }

        private bool ordersExists(string id)
        {
            return _context.orders.Any(e => e.orderid == id);
        }
    }
}