# OLLAMA AI Integration (Admin API)

## Purpose

This integration adds a local AI API (Ollama) for:
- tournament request analysis (risk, recommendation, admin note draft)
- match analysis (summary, highlights, anomaly detection)

No external paid API key is required.

## Required runtime

- Ollama running locally (`http://127.0.0.1:11434`)
- Model installed (default: `qwen3:8b`)

Example:

```bash
ollama pull qwen3:8b
ollama serve
```

## Endpoints

All routes are admin-protected (`/admin`):

- `GET /admin/api/ai/health`
- `GET /admin/api/ai/tournament-requests/{id}/analysis`
- `GET /admin/api/ai/matches/{id}/analysis`

## Environment variables

Optional:

- `TOURNAMENT_AI_OLLAMA_BASE_URL` (default: `http://127.0.0.1:11434`)
- `TOURNAMENT_AI_MODEL` (default: `qwen3:8b`)

If not set, the integration still works with defaults.

## Quick tests

### 1) Health

```bash
curl -X GET http://127.0.0.1:8000/admin/api/ai/health
```

Expected:
- `ok: true` when Ollama is reachable
- `model_installed: true` if the configured model is available

### 2) Tournament Request analysis

```bash
curl -X GET http://127.0.0.1:8000/admin/api/ai/tournament-requests/1/analysis
```

Expected response fields:
- `recommendation` (`ACCEPT|REVIEW|REFUSE`)
- `risk_score`
- `flags`
- `admin_note`
- `organizer_suggestions`

### 3) Match analysis

```bash
curl -X GET http://127.0.0.1:8000/admin/api/ai/matches/1/analysis
```

Expected response fields:
- `summary`
- `highlights`
- `anomalies`
- `mvp_guess`
- `recommended_action`

## UI test (already wired)

- `admin/tournament-requests/{id}/detail`:
  click `Lancer analyse IA`
- `admin/match-detail/{id}`:
  click `Lancer analyse IA`

Both pages display JSON output directly in the page.

