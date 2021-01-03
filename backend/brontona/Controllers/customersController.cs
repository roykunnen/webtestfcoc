using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.AspNetCore.Http;
using Microsoft.AspNetCore.Mvc;
using Microsoft.EntityFrameworkCore;
using FCOC;
using brontona.Data;

namespace brontona.Controllers
{
    [Route("api/[controller]")]
    [ApiController]
    public class customersController : ControllerBase
    {
        private readonly Context _context;

        public customersController(Context context)
        {
            _context = context;
        }

        // GET: api/customers
        [HttpGet]
        public IEnumerable<customers> Getcustomers()
        {
            return _context.customers;
        }

        // GET: api/customers/5
        [HttpGet("{id}")]
        public async Task<IActionResult> Getcustomers([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var customers = await _context.customers.FindAsync(id);

            if (customers == null)
            {
                return NotFound();
            }

            return Ok(customers);
        }

        // PUT: api/customers/5
        [HttpPut("{id}")]
        public async Task<IActionResult> Putcustomers([FromRoute] string id, [FromBody] customers customers)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            if (id != customers.customerid)
            {
                return BadRequest();
            }

            _context.Entry(customers).State = EntityState.Modified;

            try
            {
                await _context.SaveChangesAsync();
            }
            catch (DbUpdateConcurrencyException)
            {
                if (!customersExists(id))
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

        // POST: api/customers
        [HttpPost]
        public async Task<IActionResult> Postcustomers([FromBody] customers customers)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            _context.customers.Add(customers);
            await _context.SaveChangesAsync();

            return CreatedAtAction("Getcustomers", new { id = customers.customerid }, customers);
        }

        // DELETE: api/customers/5
        [HttpDelete("{id}")]
        public async Task<IActionResult> Deletecustomers([FromRoute] string id)
        {
            if (!ModelState.IsValid)
            {
                return BadRequest(ModelState);
            }

            var customers = await _context.customers.FindAsync(id);
            if (customers == null)
            {
                return NotFound();
            }

            _context.customers.Remove(customers);
            await _context.SaveChangesAsync();

            return Ok(customers);
        }

        private bool customersExists(string id)
        {
            return _context.customers.Any(e => e.customerid == id);
        }
    }
}